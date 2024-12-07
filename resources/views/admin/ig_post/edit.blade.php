<x-admin-layout>
    <div class="container mt-4">
        <h1>Edit Image</h1>
        
        <form action="{{ url('admin/ig-post/update/'. $igPost->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Replace Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        <div class="mb-3">
            <p>Current Image:</p>
            <img src="{{ url('/storage/'.$igPost->image_path) }}" alt="Image" style="width: 100px; height: 100px;">
        </div>
        <div class="mb-3">
        <label for="link" class="form-label">Link</label>
        <input type="url" name="link" id="link" class="form-control" value="{{ $igPost->link }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ url('admin/dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</x-admin-layout>

