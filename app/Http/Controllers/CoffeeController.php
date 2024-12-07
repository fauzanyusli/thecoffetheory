<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryCoffeeController;
use App\Models\Coffee;
use App\Models\CoffeeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoffeeController extends Controller
{
    public function store(Request $request, $categoryCoffeeId)
{
    // Validasi input
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
    ]);

    // Simpan gambar ke folder `storage/app/public/images`
    $imagePath = $request->file('image')->store('images/coffees', 'public');
    // Simpan path gambar ke database
    Coffee::create([
        'image_path' => $imagePath,
        'name' => $request['name'],
        'description' => $request['description'],
        'category_coffee_id' => $categoryCoffeeId,
        'price' => $request['price'],
    ]);

    return back()->with('success', 'Coffee uploaded successfully!');
}


    public function edit($id)
    {
        return view('admin.coffee.edit', [
            'coffee' => Coffee::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $coffee = Coffee::find($id);

        if ($request->file('image')) {
            // Delete old image
            if ($coffee->image_path) {
                Storage::disk('public')->delete($coffee->image_path);
            }
            $coffee->image_path = $request->file('image')->store('images/coffees', 'public');
        }
        $coffee->link = $request['link'];
        $coffee->save();

        return redirect()->to('admin/dashboard')->with('success', 'Coffee updated successfully.');
    }

    public function destroy($coffee)
    {
        if ($coffee->image_path) {
            Storage::disk('public')->delete($coffee->image_path);
        }

        $coffeeCategory = Coffee::find($coffee->id);

        $coffee->delete();

        return redirect('/admin/category/'.$coffeeCategory->id)->with('success', 'Coffee deleted successfully.');
    }
}
