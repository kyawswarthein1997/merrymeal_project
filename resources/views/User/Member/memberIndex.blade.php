@section('title')
    Partner Dashboard
@endsection

@extends('User.Member.layouts.app')

@section('content')
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Member Dashboard</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<div class="container">
    <div class="row">
        @foreach ($mealData as $meal)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card border-secondary mt-3 mb-4">
                <div class="card-header">
                    <h5 class="card-title text-center">{{ $meal->meal_name }}</h5>
                </div>
                <div class="card-body ">
                    <img src="{{ asset('uploads/meal/' . $meal->meal_image) }}"  width="100%" height="300px"  alt="Images">
                    <div class="card-text pt-2"> <b> Partner Organization Name </b> : {{$meal->partners->partnership_organization}}</div>
                    <div class="card-text pt-2"> <b> Meal Type </b> : {{$meal->meal_type }}</div>
                </div>
                <div class="card-footer bg-transparent ">
                    <a href="{{ route('member#memberMealDetails', $meal->id) }}" class="btn btn-primary">More details</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
