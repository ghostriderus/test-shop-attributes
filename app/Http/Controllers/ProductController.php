<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Color, App\Models\Size; 

class ProductController extends Controller
{	
	public function show ($id)
	{
		$product = Product::find($id);
		return view('product',[
			'product' => $product
		]);
	}
	
}
