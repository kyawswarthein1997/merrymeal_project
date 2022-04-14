@extends('User.Donor.layouts.app')

@section('content')
<style type="text/css">
    #donate{
        max-width: 500px;
        padding: 20px;
        margin: 50px auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);
    }
</style>

<!-- Start breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('donor#index') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('donor#index') }}">Donor Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Donor</li>
    </ol>
</nav>
<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">

    <div class="col col-sm-6" id="donate">
      <form action="" method="post">

        <div class="form-foating py-3">
            <h3 class="text-center"> Update Donor</h3>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Donor Name</label>
          <input type="text" class="form-control" required="true">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Donor Phone number</label>
          <input type="tel" class="form-control" maxlength="11" required="true">
        </div>

          <button type="submit" class="btn btn-outline-primary" style="float: right;">Update
          </button>
      </form>
    </div>
</div>
<!-- End content -->


@endsection
