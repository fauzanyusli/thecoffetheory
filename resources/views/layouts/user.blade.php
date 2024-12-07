<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Coffe Theory</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial - scale=1.0">
        <title>The Coffe Theory</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <di class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                        </div>
                            <nav class="navbar navbar-expand-lg navbar- light bg-transparent fixed-top">
                            <div class="container">
              <a class="navbar-brand" href="#"><span class="text-warning">The Coffe</span> Theory</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#carouselExampleCaptions">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#product">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#form">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
</header>
{{ $slot }}
<!-- Footer -->
<footer style="background-color: #000; color: #fff; padding: 30px 15px;">
  <div class="container">
    <div class="row">
      <!-- Location Section -->
      <div class="col-md-6">
        <h5><strong>OUR LOCATION</strong></h5>
        <p>The Cofee Theory, Jl. Prof. DR. Bahder Djohan, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
        <!-- Embed Google Maps -->
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63442.64719329845!2d106.78026032703724!3d-6.372629899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed8bdac4a3c3%3A0x69017e81c8827861!2sThe%20Cofee%20Theory!5e0!3m2!1sid!2sid!4v1732889340540!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          width="100%" height="100%" style="border: 0; margin-top: 10px;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>

      <!-- Contact Section -->
      <div class="col-md-6">
        <h5><strong>Kritik, Pesan, dan Saran</strong></h5>
        <p>0896-3657-5518<br> <span style="font-weight: bold;">Whatsapp Chat Only</span></p>
        <h5><strong>Komplain Customer, Reservasi, dan Informasi lainnya.</strong></h5>
      </div>
    </div>
  </div>
</footer>
      </section>
            <!-- Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
