@extends('Admin.layouts.app')

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-5">
            <div class="card mt-4">
              <div class="card-header">
                    <h3 class="card-title mt-1"> Donor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Donar Name</th>
                            <th>Donation Plan</th>
                            <th>Donation Date</th>
                            <th>Donation Amount</th>
                            <th>Payment Type</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                  </thead>
                  <tbody>
                      @foreach ($donorDonation as $donor )
                        <tr>
                            <td>{{ $donor->id }}</td>
                            <td>{{ $donor->donar_name }}</td>
                            <td>{{ $donor->donors->donation_plan }}</td>
                            <td>{{ $donor->date }}</td>
                            <td>{{ $donor->donation_amount }}</td>
                            <td>
                                @if ( $donor->payment_type == 0)
                                    PayPal
                                @elseif ( $donor->payment_type == 1 )
                                    Visa card
                                @endif
                            </td>
                            {{-- <td>Action</td> --}}
                        </tr>
                      @endforeach
                  </tbody>
                </table>

              </div>
              {{-- Pagination Link Format --}}




              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
