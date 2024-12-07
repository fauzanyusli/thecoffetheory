<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'link' => 'required',
    ]);

    // Simpan gambar ke folder `storage/app/public/images`
    $imagePath = $request->file('image')->store('images/promos', 'public');
    // Simpan path gambar ke database
    Promo::create([
        'image_path' => $imagePath,
        'link' => $request->link,
    ]);

    return back()->with('success', 'Promo uploaded successfully!');
}


    public function edit($id)
    {
        return view('admin.promos.edit', [
            'promo' => Promo::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required',
        ]);

        $promo = Promo::find($id);

        if ($request->file('image')) {
            // Delete old image
            if ($promo->image_path) {
                Storage::disk('public')->delete($promo->image_path);
            }
            $promo->image_path = $request->file('image')->store('images/promos', 'public');
        }
        $promo->link = $request['link'];
        $promo->save();

        return redirect()->to('admin/dashboard')->with('success', 'Promo updated successfully.');
    }

    public function destroy($promoId)
    {
        $promo = Promo::find($promoId);
        if ($promo->image_path) {
            Storage::disk('public')->delete($promo->image_path);
        }

        $promo->delete();

        return back()->with('success', 'Promo deleted successfully.');
    }
}
