<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>





<body>






     <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Aswin Kamera</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('aboutme')}}">About me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Login</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <br>
      <br>













<div class="d-flex flex-column mb-3 justify-content-center">
    <div class="p-2">




        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 650px;">
                <img src="/img/logo.png" class="d-block w-100 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>ASWIN KAMERA</h5>
                  <p>Akses cepat, peralatan terbaik. Sewa harian, mingguan, bulanan. Layanan responsif, harga kompetitif.</p>
                </div>
              </div>
              <div class="carousel-item " style="height: 650px;">
                <img src="/img/kamerahome1.jpg" class="d-block w-100 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ASWIN KAMERA</h5>
                    <p>Akses cepat, peralatan terbaik. Sewa harian, mingguan, bulanan. Layanan responsif, harga kompetitif.</p>
                </div>
              </div>
              <div class="carousel-item " style="height: 650px;">
                <img src="/img/kamera3.jpeg" class="d-block w-100 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ASWIN KAMERA</h5>
                    <p>Akses cepat, peralatan terbaik. Sewa harian, mingguan, bulanan. Layanan responsif, harga kompetitif.</p>
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

          <br>
          <br>
          <h1 style="text-align: center;">Halo pencari petualangan visual, Di sini Aswin Kamera siap membantu mengabadikan momen tak terlupakanmu <span class="badge bg-secondary">New</span></h1>

          {{-- <h1>Halo, pencari petualangan visual! Di sini,  Aswin Kamera siap membantu mengabadikan momen tak terlupakanmu <span class="badge bg-secondary">New</span></h1> --}}

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($product as $row)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="text-center mt-5 mb-2">
                                <img src="/images/{{ $row->image }}" alt="{{ $row->image }}" width="200" height="200">
                            </div>

                            <div class="card-body">
                                <p><strong>Nama:</strong> {{ $row->name }}</p>
                                <p><strong>Harga:</strong> {{ $row->price }}</p>
                                <div class="product-description">
                                    <p><strong>Details:</strong>
                                        <span class="short-description">{{ substr($row->detail, 0, 50) }}</span>
                                        <span class="long-description" style="display: none;">{{ $row->detail }}</span>
                                        <button class="read-more btn-link">Read more</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="alert alert-danger m-0">
                                Data masih kosong
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        // Tambahkan script JavaScript
        const readMoreBtns = document.querySelectorAll('.read-more');

        readMoreBtns.forEach((btn) => {
            btn.addEventListener('click', function () {
                const shortDesc = this.parentElement.querySelector('.short-description');
                const longDesc = this.parentElement.querySelector('.long-description');

                if (shortDesc.style.display !== 'none') {
                    shortDesc.style.display = 'none';
                    longDesc.style.display = 'inline';
                    this.textContent = 'Read less';
                } else {
                    shortDesc.style.display = 'inline';
                    longDesc.style.display = 'none';
                    this.textContent = 'Read more';
                }
            });
        });
    </script>


<style>
    .dropdown {
      position: relative;
      text-align: center; /* Untuk membuat dropdown muncul di tengah */
    }

    .dropdown-menu {
      left: 50%;
      transform: translateX(-50%);
    }

    .btn-secondary {
    background-color: green;
  }
  </style>

    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pesan Sekarang
        </a>

        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="https://wa.me/6282333045787">Via WhatsApp</a></li>
        <li><a class="dropdown-item" href="https://maps.app.goo.gl/fkoxKgwzjKAvQatg6">Langsung ke toko</a></li>
        </ul>
    </div>










    </div>


 </div>

    @include('homepage.footer')








</body>
</html>
