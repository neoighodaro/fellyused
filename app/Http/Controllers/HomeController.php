<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $goods = Good::query()->select('image', 'price', 'name')->paginate();

        return view('home.index', compact('categories', 'goods'));
    }
}
