<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public static function product($id)
    {
        session_start();

        $product = Product::where("id", $id)->first();
        $products = Product::all();
        if($product)
        {
            return view('product_page', ['product' => $product, 'products' => $products]);
        }
        else{
            return 'Error!';
        }
    }


	public static function catalog(Request $request)
    {
        session_start();
		$page = $request->page;
		$products = Product::all();

		if (!$page)
		{
			$page = 1;
		}

        if($products)
        {
            return view('catalog', ['products' => $products, 'page' => $page]);
        }
        else{
            return 'Error!';
        }
    }

	public static function index()
    {
        session_start();

		$products = Product::all();

        if($products)
        {
            return view('index', ['products' => $products]);
        }
        else{
            return 'Error!';
        }
    }
}