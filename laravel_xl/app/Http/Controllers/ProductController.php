<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function post_product()
    {
        return $number;
    }
    public function user_pro(string $user_id,string $comment,string $mobile)
    {
        return redirect()->route('category',[45 , 67 , 'string_value']); //$user_id.'___'.$comment.'___'.$mobile;
    }
    public function single(string $singlePage,Product $product)
    {
        print_r($product);
    }
}
