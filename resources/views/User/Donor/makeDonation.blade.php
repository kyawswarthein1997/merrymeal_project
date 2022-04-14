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
      <li class="breadcrumb-item active" aria-current="page">Donation Page</li>
    </ol>
</nav>
<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">

        <div class="col col-sm-6" id="donate">
          <form action="{{ route('donor#donate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Donar Name</label>
                <input type="text" class="form-control" name="donar_name" value="{{ old('donar_name', Auth()->user()->name) }}">
            </div>

            <div class="mb-3">
              <label for="number" class="form-label">Donation Amount</label>
              <input type="text" class="form-control" name="donation_amount">
            </div>

            <div class="mb-3">
              <label for="payment" class="form-label">Payment type</label>
              <select class="form-select" name="payment_type">
                  <option value="">Choose payment</option>
                  <option value="0">paypal</option>
                  <option value="1">visa card</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Date</label>
              <input type="date" class="form-control" name="date">
            </div>

            <div class="form-floating mb-3">
                <select name="donor" class="form-control">
                    @foreach ($donorData as $donor)
                        <option value="{{ $donor->id }}">{{ $donor->donation_plan }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-outline-primary" style="float: right;">Donate
            </button>
          </form>
        </div>
    </div>
</div>
<!-- End content -->


@endsection
