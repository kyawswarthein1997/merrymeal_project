@section('ttile')
    Merry Meal
@endsection

@extends('layouts.app')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('main/image/banner1.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('main/image/banner2.jpg')}}" class="rounded mx-auto d-block" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h2 class="mt-0"><center>A Charitable Organization</center></h2>
           <p class="lead" style="margin: 30px;">
             Charitable organization is a kind of institution or a business that falls under the category of NPO or non-profit organization. It can be run privately as well as publicly. This type of organization is often called a foundation or charity. It can be based on educational, religious or even based on public interest activities. The law and regulation of the charity is dependent on the country or the region where it has been established and operated. A charity is something which is gifted or donated to an organization or an individual to help them or to benefit them.
            </p>
      </div>
    </div>
  </div>

  <div class="container-fluid">
      <div class="row no-gutters  position-relative">
        <div class="col-md-6 position-static p-4 pl-md-0">
          <h5 class="mt-5">Giving is inclusive, effective, and abundant driving greater impact for causes people care about.Make impactful giving easier for all</h5>
        </div>
        <div class="col-md-6 mb-md-0 p-md-4">
          <img src="{{ asset('main/image/b.jpeg')}}" class="w-100" alt="...">
        </div>
    </div>
  </div>
@endsection

