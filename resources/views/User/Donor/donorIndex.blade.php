@extends('User.Donor.layouts.app')

@section('content')
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('donor#index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Donor Dashboard</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <a href="{{ route('donor#makeDonation') }}">
        <button type="button" class="btn btn-primary mt-4 mb-4">Make Donation</button>
        </a>
      </div>
    </div>

    <div class="card  mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" >

            <thead>
              <tr>
                <th>No.</th>
                <th>Donoation Date</th>
                <th>Amount</th>
                <th>Pyament</th>
                <th>Donation Plan</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($donationDetails as $donor)
                    <tr>
                        <td>{{ $donor->id }}</td>
                        <td>{{ $donor->date }}</td>
                        <td>{{ $donor->donation_amount }}</td>
                        <td>
                            @if ( $donor->payment_type == 0 )
                                PayPal
                            @elseif( $donor->payment_type == 1)
                                Visa Card
                            @endif
                        </td>
                        <td>{{ $donor->donors->donation_plan }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<!-- End content -->


@endsection
