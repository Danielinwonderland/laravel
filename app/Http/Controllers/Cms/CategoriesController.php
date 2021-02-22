<?php

namespace App\Http\Controllers\Cms;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller

{
    public function index()
    {
        //
        $categories = Category::all();

        return view('cms.categories.index')
            ->with('categories', $categories);
    }


    public function single() {

//        $categories = Category::with('latestPost')->take(20)->get();
//        return view('categories.single', compact('categories'));
//
//        $categories = Category::with(['articles' => function ($q) {
//            $q->latest()->limit(1);
//        }])->take(20)->get();
//        return view('categories.single', compact('categories'));
//
//
//        $categories = Category::take(20)->get();
//        return view('categories.single', compact('categories'));

        $category = Category::first();
        $latestPost = $category->articles()->latest()->first();
        return view('categories.single', compact('latestPost'));

    }

    public function create()
    {
            $categories = Category::all()->pluck('name', 'id');
        $categories->prepend('-- верхний уровень --', null);
        return view('cms.categories.create')->withCategories($categories);
    }

}
