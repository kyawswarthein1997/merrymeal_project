@section('title')
    Partner Dashboard
@endsection

@extends('User.Member.layouts.app')

@section('content')
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Member Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Member Menu Details Page</a></li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row no-gutters  position-relative mt-4 mb-4" id="menud">
      <div class="col-md-6 mb-md-0 p-md-4">
        <img src="{{ asset('uploads/meal/' . $mealDetails->meal_image) }}"  width="100%" height="500px"  alt="Images">
      </div>



      <div class="col-md-6 position-static p-4 pl-md-0">
        <form action="{{ route('member#memberOrder') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Member Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="member_name" value="{{ old('member_name', Auth()->user()->name) }}">
                  </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Member Address</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="member_address" value="{{ old('member_address', Auth()->user()->address) }}">
                  </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Member Phone Number</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="member_phone" value="{{ old('member_phone', Auth()->user()->phone) }}" >
                </div>
            </div>


            {{-- Meal Image --}}
            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Meal Image</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control"   placeholder="name" name="meal_image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Meal Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="meal_name" value="{{ old('meal_name', $mealDetails->meal_name) }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Meal Type</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="meal_type" value="{{ old('meal_type', $mealDetails->meal_type) }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Partner Organizations Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="partner_organizations" value="{{ old('partnership_organization', $mealDetails->partners->partnership_organization) }}" >
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-4 col-form-label">Partner Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="partner_address" value="{{ old('address', $mealDetails->users->address) }}" >
                </div>
            </div>

            <div class="row mb-4">
                <label for="name" class="col-sm-4 col-form-label">Type of Meal</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="type_of_meal" value="Hot Meal" >
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7640.050975298608!2d96.1496092745822!3d16.775407503792184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x30c1ec808a6dda1f%3A0x2cb8d7430c30567b!2s28th%20St%2C%20Yangon%2C%20Myanmar%20(Burma)!3m2!1d16.775323399999998!2d96.1553824!4m5!1s0x30c1ec7e01f6e53d%3A0xa1e6e5d25db40f77!2s31st%20St%2C%20Yangon%2C%20Myanmar%20(Burma)!3m2!1d16.7754875!2d96.1577001!5e0!3m2!1sen!2ssg!4v1649908015842!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

          <button type="submit" class="btn btn-outline-primary" style="float: right;">Place order
          </button>
        </form>
      </div>
    </div>
</div>
<!-- End content -->



@endsection
