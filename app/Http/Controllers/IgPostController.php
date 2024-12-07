<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IgPost;
use Illuminate\Support\Facades\Storage;

class IgPostController extends Controller
{
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'link' => 'required',
    ]);

    // Simpan gambar ke folder `storage/app/public/images`
    $imagePath = $request->file('image')->store('images/ig_posts', 'public');
    // Simpan path gambar ke database
    IgPost::create([
        'image_path' => $imagePath,
        'link' => $request->link,
    ]);

    return back()->with('success', 'IgPost uploaded successfully!');
}


    public function edit($id)
    {
        return view('admin.ig_post.edit', [
            'igPost' => IgPost::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required',
        ]);

        $igPost = IgPost::find($id);

        if ($request->file('image')) {
            // Delete old image
            if ($igPost->image_path) {
                Storage::disk('public')->delete($igPost->image_path);
            }
            $igPost->image_path = $request->file('image')->store('images/ig_posts', 'public');
        }
        $igPost->link = $request['link'];
        $igPost->save();

        return redirect()->to('admin/dashboard')->with('success', 'IgPost updated successfully.');
    }

    public function destroy($id)
    {
        $igPost = IgPost::find($id);
        if ($igPost->image_path) {
            Storage::disk('public')->delete($igPost->image_path);
        }

        $igPost->delete();

        return back()->with('success_IgPost', 'IgPost deleted successfully.');
    }
}
