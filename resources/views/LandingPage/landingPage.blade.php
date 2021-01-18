<!doctype html>
<html lang="en" id="home">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/LandingPage/style.css')}}">

    <title>Tiem Studio</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home"><img src="{{asset('/LandingPage/img/logo_.jpeg')}}" class="img-fluid rounded-circle" alt="">Tiem Studio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#galeri">Pricing</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">About</a>
            <a class="btn btn-primary tombol" href="#">Join US</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Get work done <span>faster</span> <br>and <span>better</span> with us</h1>
        <a href="" class="btn btn-primary tombol">Our Work</a>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container">

      <!-- info Panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg ">
              <img src="{{asset('/LandingPage/img/employee.png')}}" alt="employee" class="float-left">
              <h4>24 Hours</h4>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="col-lg">
              <img src="{{asset('/LandingPage/img/hires.png')}}" alt="hires" class="float-left">
              <h4>High-Rish</h4>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="col-lg">
              <img src="{{asset('/LandingPage/img/security.png')}}" alt="security" class="float-left">
              <h4>Security</h4>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Info Panel -->


      <!-- Workingspace -->
      <div class="row workingspace" id="galeri">
        <div class="col-lg workspace-kiri">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/LandingPage/img/trunojoyo.jpg')}}" class="d-block w-100 img-fluid rounded" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/LandingPage/img/trunojoyo.jpg')}}" class="d-block w-100 img-fluid rounded" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/LandingPage/img/trunojoyo.jpg')}}" class="d-block w-100 img-fluid rounded" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg workspace-kanan">
          <h3>You <span>work</span> like at <span>home</span></h3>
          <p>Bekerja dengan suasana hati yang lebih asik dan memperlajari hal baru setiap harinya</p>
          <a href="" class="btn btn-primary tombol">Gallery</a>
        </div>
      </div>
      <!-- End workingspace -->


      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h5>"Mantap sekali untuk hasil programnya sangat menarik dan memudahkan pengguna dalam"</h5>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 d-flex justify-content-center">
            <figure class="figure">
              <img src="{{asset('/LandingPage/img/img1.png')}}" class="figure-img img-fluid rounded-circle" alt="Testi 2">
            </figure>
            <figure class="figure">
              <img src="{{asset('/LandingPage/img/img2.png')}}" class="figure-img img-fluid rounded-circle utama" alt="Testi 1">
              <figcaption class="figure-caption">
                <h5>Roy Wahyu</h5>
                <p>2D Artist</p>
              </figcaption>
            </figure>
            <figure class="figure">
              <img src="{{asset('/LandingPage/img/img3.png')}}" class="figure-img img-fluid rounded-circle" alt="Testi 3">
            </figure>
          </div>
        </div>
      </section>
      <!-- End Testimonial -->


      <!-- footer -->
      <div class="row footer">
        <div class="col text-center">
          <p>2020 All rights Reserved by TiemStudio.</p>
        </div>
      </div>
      <!-- end footer -->

    </div>
    <!-- End Container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"></script>
    <script src="{{asset('/LandingPage/script.js')}}"></script>
  </body>

</html>
