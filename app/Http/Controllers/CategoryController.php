<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category, App\Models\Product, App\Models\Color, App\Models\Size; 

class CategoryController extends Controller
{
    public function index (Request $request)
	{
		$categories = Category::all();
		return view('home', [
			'categories' => $categories
		]);
	}
	
	public function show ($id, Request $request)
	{
		$category = Category::find($id);
		$items = $category->products()->whereHas('skus', function($q){
			$q->where('quantity', '>', 0);
		});
		if($request->filled('color')){				
			$items = $items->whereHas('skus', function($q) use ($request){
				$q->where('color_id', $request->color);
			});
		}
		if($request->filled('size')){
			$items = $items->whereHas('skus', function($q) use ($request){
				$q->where('size_id', $request->size);
			});
		}
		$items = $items->get();
		$colors = Color::pluck('value', 'id');
		$sizes = Size::pluck('value', 'id');
		return view('category', [
			'category' => $category,
			'items' => $items,
			'colors' => $colors,
			'sizes' => $sizes
		]);
	}
}
