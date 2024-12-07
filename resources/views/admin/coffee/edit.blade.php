<x-admin-layout>
    <div class="container mt-4">
        <h1>Edit Image</h1>
        
        <form action="{{ url('admin/coffee/update/'. $coffee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Replace Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        <div class="mb-3">
            <p>Current Image:</p>
            <img src="{{ url($coffee->image_path) }}" alt="Image" style="width: 100px; height: 100px;">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $coffee->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $coffee->description }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $coffee->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ url('admin/category/'. $coffee->category_coffee_id) }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</x-admin-layout>

