<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoryAction($id)
    {
        $category = Categories::find($id);
        if ($category) {
            $goods = Goods::find(['category_id' => $category->id]);
            return view('goods', ['goods' => $goods]);
        }
    }
}
