<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merry Meal Web Portal</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: auto   !important">
    <a href="{{ route('admin#adminMember') }}" class="brand-link">

      <span class="brand-text font-weight-light">Merry Meal Web Portal </span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item">
                <a href="{{ route('admin#index') }}" class="nav-link">
                    <p class="pl-2">
                        User List
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin#adminMember') }}" class="nav-link">
                    <p class="pl-2">
                        Member
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin#adminPartner') }}" class="nav-link">
                    <p class="pl-2">
                        Partner
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin#adminVolunteer') }}" class="nav-link">
                    <p class="pl-2">
                        Volunteer
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin#adminDonor') }}" class="nav-link">
                    <p class="pl-2">
                        Donor
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="" class="nav-link">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-1 mt-1">
                                <i class="fas fa-sign-out-alt" ></i>
                            </div>
                            <p>
                                <button type="submit" class="btn py-0" style="color: #c2c7d0; color:hover{#fff}; button:focus { outline: none; }">  Logout </button>
                            </p>
                        </div>
                    </form>
                </a>
            </li>

        </ul>
      </nav>
    </div>
  </aside>

  @yield('content')

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}" ></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}" ></script>
    <script src="{{ asset('dist/js/demo.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
