<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    function index(Request $request){
        $cartItems = $this->getCartItems();

        // Cookie::queue('cart', $cart);      //寫入cookie
        return view('cart.index',[
            "cartItems" => $cartItems
        ]);
    }

    public function updateCookie(Request $request){
        $cart = $this->getCartFromCookie();
        foreach($cart as $productId => $currentQuantity){
            $key = "product_" . $productId;
            if($request->has($key)){
                $cart[$productId] = $request->input($key);
            }
        }
        $cart = json_encode($cart, true);

        cookie::queue(
            cookie::make('cart', $cart, 60*24*7, null, null, false, false)  //'name', 'value', $minutes, $path, $domain, $secure, httpOnly
        );
        return redirect()->route('cart.index');
    }

    public function deleteCookie(Request $request){
        if ($request->has('id')){
            $productId = $request->input('id');
            $cart = $this->getCartFromCookie();

            if (isset($cart[$productId])){
                unset($cart[$productId]);
                $cartToJson = empty($cart) ? "{}" : json_encode($cart, true);
                cookie::queue(
                    cookie::make('cart', $cartToJson, 60*24*7, null, null, false, false)
                );
                return response('success');
                
            
            }
        }
        return response('failed');
    }


    private function getCartFromCookie(){
        $cart = Cookie::get('cart');
        return (!is_null($cart)) ? json_decode($cart, true) : [];
    }

    private function getCartItems(){
        //[ id => quantity ]
        $cart = $this->getCartFromCookie();  
        //[ id ]
        $productIds = array_keys($cart);
        //[
        //   [product => value, quantity =>value ]    
        //]
        $cartItems = array_map(function($productId) use ($cart){
            $quantity = $cart[$productId];
            $product = $this->getProduct($productId);
            if ($product){
                return [
                    "product" => $product,
                    "quantity" => $quantity,
                ];
            }else{
                return null;
            }
            
        }, $productIds);
        return $cartItems;

    }

    private function getProduct($id){
        $products = $this->getProducts();
        foreach($products as $product){
            if($product["id"]== $id){
                return $product;
            }
        }
        return null;
    }

    private function getProducts()
    {
        return [
            [
                "id" => 1,
                "name" => "Tony",
                "price" => 30,
                "imageUrl" => asset('images/cat1.jpg')
            ],
            [
                "id" => 2,
                "name" => "Fancy",
                "price" => 28,
                "imageUrl" => asset('images/cat2.jpg')
            ],
            [
                "id" =>3,
                "name" => "Louies",
                "price" => 32,
                "imageUrl" => asset('images/cat3.jpg')
            ]
            ];
        

    }


}
