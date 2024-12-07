{{-- <x-user-layout>
    
</x-user-layout> --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Coffee Menu</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.menu-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 50px;
    flex-wrap: wrap;
}

.menu-item {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    transition: transform 0.3s ease;
}

.menu-item:hover {
    transform: scale(1.05);
}

.menu-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.menu-details {
    padding: 20px;
}

.menu-details h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #333;
}

.menu-details .description {
    font-size: 1em;
    color: #777;
    margin-bottom: 15px;
}

.menu-details .price {
    font-size: 1.2em;
    font-weight: bold;
    color: #3498db;
}

    </style>
</head>
<body>
    <div class="menu-container">
        @foreach ($coffees as $c)
        <div class="menu-item">
            <img src="{{ url('storage/'.$c->image_path) }}" alt="{{ $c->name }}">
            <div class="menu-details">
                <h3>{{ $c->name }}</h3>
                <p class="description">{{ $c->description }}</p>
                <p class="price">Rp. {{ $c->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>

