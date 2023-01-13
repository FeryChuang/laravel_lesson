<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Rules\ProductImageRule;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    private $products;

    public function __construct()
    {
        $this->products = $this->getProducts();
    }

    public function index(Request $request)
    {
        return view('product.index',[
            "products" => $this->products,
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'product_name' => 'required|string|max:10',
        //     'product_price' => 'required|integer|min:0|max:9999',
        //     // 'product_image' => ['required', 'string', new ProductImageRule("Love cat!"), ],
        // ]);

        // if ($validator->fails()){
        //     return redirect('products/create')
        //               ->withErrors($validator)
        //               ->withInput();
        // }
        // $validated = $request->validate([
        //     'product_name' => 'required|string|max:10',
        //     'product_price' => 'required|integer|min:0|max:9999',
        //     'product_image' => ['required', 'string', new ProductImageRule("Love cat!"), ],
        // ]);

        $path = $request->file('product_image')->storeAS(' ','04');
        // $path = Storage::putFile('products', $request->file('product_image'));
        return redirect()->route('products.index');

        
    }

    

    function show($id, Request $request)
    {

        // $id = $request->input('id');

        $products = $this->getProducts();
        $index = $id -1;    

        if ($index<0 || $index>= count($products)){
            abort(404);
        }
        $product = $products[$index];

            return view('product.show',[
                "product" => $product
            ]
        );

                
    }
    public function edit($id)
    {
        $products = $this->getProducts();
        $index = $id -1;    

        if ($index<0 || $index>= count($products)){
            abort(404);
        }
        $product = $products[$index];
        return view('product.edit',[
            "product" => $product
        ]);
    }
    public function update(Request $request, $id)
    {
        $products = $this->getProducts();
        $index = $id -1;    

        if ($index<0 || $index>= count($products)){
            abort(404);
        }
        $product = $products[$index];
        return redirect()->route('products.edit', ['product' => $product['id']]);
    }
    public function destroy($id)
    {
        return redirect()->route('products.index');
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
