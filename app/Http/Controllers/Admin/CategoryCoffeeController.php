<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CoffeeCategory;
use App\Models\Coffee;

class CategoryCoffeeController extends Controller
{
    public function index($id) {
        return view('admin.categories.index', [
            'category' => CoffeeCategory::find($id),
            'coffees' => Coffee::where('category_coffee_id', $id)->get(),
        ]);
    }
}
