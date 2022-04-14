<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    <!------------CSS-------------->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style.css')}}">

    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->


<!-- Start nav -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('main') }}   ">Merry meal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>


        @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-medium btn-white text-white btn-radius">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-medium btn-blue text-white btn-radius">Register</a>
                    @endif
                @endauth
            </ul>
        @endif

    </div>
  </div>
</nav>
<!-- END nav -->

<!-- Content -->

    @yield('content')

<!-- End Content -->

<footer>
    <div class="footer2">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h5 id="foot3">&copy; Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved.</h5>
          </div>
        </div>
      </div>
    </div>
</footer>

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
