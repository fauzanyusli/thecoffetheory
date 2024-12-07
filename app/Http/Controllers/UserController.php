<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\IgPost;
use App\Models\Coffee;
use App\Models\CoffeeCategory;

class UserController extends Controller
{
    public function index() {
        return view('User.index', [
            'promos' => Promo::all(),
            'igPost' => IgPost::all(),
            'categories' => CoffeeCategory::all(),
        ]);
    }

    public function coffee($categoryId) {
        return view('User.coffee', [
            'coffees' => Coffee::where('category_coffee_id', $categoryId)->get(),
        ]);
    }
}
