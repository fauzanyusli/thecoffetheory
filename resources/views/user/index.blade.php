<x-user-layout>
    <!-- Carousel Start here -->
<div id="carouselExampleCaptions" class="carousel slide pb-5" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" {{ url('images/flyer/americano.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>AMERICANO</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('images/flyer/caramellatteart.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>CARAMEL LATTE ART</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('images/flyer/espressolatteart.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>ESPRESSO LATTE ART</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel End here -->
<!-- About Section Start here -->
<section id="about" class="about-section-padding mb-6">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12 col12">
                  <div class="about-img">
                    <img src="images/Coffe Theory .png" sizes="400x500" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                  <div class="about-text">
                    <h2>The Coffe Theory</h2>
                    <p>Coffee Theory lahir dari mimpi Abdul, vokalis grup band Abdul & The Coffee Theory, yang ingin mempersiapkan masa depan di luar dunia musik. Kedai kopi ini pertama kali berdiri di Lewinanggung, Cibubur, pada tahun 2016 dengan hanya satu karyawan.
                      <p>Seiring waktu, Coffee Theory berkembang dan membuka cabang di berbagai lokasi seperti Cikini, Rumah Genjing, GBK, Alam Sutera, Jalan Jaksa, dan Ciganjur, hingga mencapai puncaknya dengan 10 karyawan.Namun, pandemi COVID-19 menjadi tantangan besar yang memaksa sebagian besar cabang harus ditutup. Meskipun demikian, semangat untuk bertahan terus hidup. Kini, Coffee Theory tetap melayani pelanggannya di cabang RSUI, yang telah berdiri sejak 2020 dengan enam karyawan yang berdedikasi. Perjalanan ini menjadikan Coffee Theory sebagai cerminan ketekunan dan inovasi, dari sebuah ide sederhana hingga bisnis yang tetap relevan di tengah tantangan.</p>
                    <p>Jl. Prof. DR. Bahder Djohan, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

<!-- Product -->
<div class="container mt-5">
  <div class="row">
    <div class="kategori"> 
    <h2>Kategori Produk</h2>
    </div>

    @foreach ($categories as $c)
    <!-- Card -->
    <div class="col-md-3 mb-3">
      <a href="{{ url('category/'.$c->id) }}">
        <div class="card">
          <div class="card-img-container" style="position: relative; overflow: hidden;">
            <img src="{{ url('storage/'.$c->image_path) }}" class="card-img-top" alt="..." style="height: 200px; width: 100%; object-fit: cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); color: white;">
              <h5 class="card-title">{{ $c->name }}</h5>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

<!-- Apps -->
<div class="container app-section">
  <div class="row align-items-center">
    <!-- Kolom Gambar -->
    <div class="col-md-6 text-center app-image">
      <video height="430" autoplay muted loop>
        <source src="{{ url('videos/videotct.mp4') }}" type="video/mp4">
        Your browser does not support HTML video.
      </video>
    </div>
    <!-- Kolom Informasi -->
    <div class="col-md-6 app-info">
      <h1>COOMING SOON</h1>
      <h1>THE COFFE THEORY APP</h1>
      <p>Dapatkan pengalaman akses prioritas, diskon, dan benefit lainnya!</p>
      <h5>Seputar App</h5>
      <ul>
        <li>Transaksi, Grab & Take Order</li>
        <li>Bergabung dengan mendaftarkan diri anda!</li>
      </ul>
      <p><strong>Pengalaman baru, fitur terbaik, hanya di The Coffe Theory App</strong></p>
      <div class="download-buttons">
        <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play"></a>
      </div>
    </div>
  </div>
</div>

<!-- Promo of the month -->
<div class="container promo-section mt-2">
  <h1>PROMO OF THE MONTH</h1>
  <div class="row justify-content-center">
    @foreach ($promos as $p)
    <div class="col-md-3 promo-card">
      <a href="{{ $p->link }}" target="_blank">
        <img src="{{ url('storage/'.$p->image_path) }}" alt="{{ $p->name }}">
      </a>
    </div>
    @endforeach
  </div>
</div>

<!-- Instagram -->
<div class="container justify-content-center d-flex">
  <div class="grid-container">
    @foreach ($igPost as $i)
    <div class="grid-item">
      <!-- <a href="{{ $i->link }}" target="_blank"> -->
      <img src="{{ url('storage/'. $i->image_path) }}" alt="{{ $i->name }}" width="200">
    </div>
    @endforeach
  </div>
</div>
<div class="justify-content-center">
  <a href="https://www.instagram.com/thecoffeetheoryofficial/" target="_blank" class="instagram-link">Instagram @thecoffetheoryofficial</a>
</div>


<!-- Team
          <section class="tim section-padding" id="team" >
            <p class="text-center">TEAM PROJECT</p>
            <div class="row">
              <div class="tim-container">
                <div class="tim-anggota">
                <img src="images/ojan.jpg" alt="Fauzan Yusli Hamid">
                <h3>Fauzan Yusli</h3>
                      <p>Project Manager</p>
                  <div class="tim-anggota">
                    <img src="images/ojan.jpg" alt="Fauzan Yusli Hamid">
                    <h3>Nauval</h3>
                    <p>Analys and Riset</p>
                </div>
                  <div class="tim-anggota">
                      <img src="images/carlos.jpg" alt="Razka Abyasa Zulfikar">
                      <h3>Carlos</h3>
                      <p>UI/UX Design</p>
                  </div>
                  <div class="tim-anggota">
                    <img src="images/surya.jpg" alt="Fauzan Yusli Hamid">
                    <h3>Ahmad Faroki</h3>
                    <p>Database</p>
                </div>
              </div>
            </div>
        </section> -->
</x-user-layout>