<?php

namespace App\Http\Controllers;

use App\Models\CoffeeCategory;
use Illuminate\Http\Request;
use App\Models\IgPost;
use App\Models\Promo;

class AdminController extends Controller
{
    public function index() {
        return view('Admin.dashboard', [
            'promos' => Promo::all(),
            'categories' => CoffeeCategory::all(),
            'posts' => IgPost::all(),
        ]);
    }
}
