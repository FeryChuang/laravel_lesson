<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        "cart"
    ];
    /**寫在這邊的東西在前後台傳遞讀取不需要被加密或有加密才讀取 */
}
