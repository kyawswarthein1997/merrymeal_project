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
                    <h3 class="card-title mt-1"> Partner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Partner Organization Name</th>
                            <th>Partner Offer Meal</th>
                            <th>Meal Image</th>
                            <th>Partnership Timeline</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                  </thead>
                  <tbody>
                    @foreach ($partnerMeals as $partner)
                        <tr>
                            <td>{{ $partner->id }}</td>
                            <td>{{ $partner->partners->partnership_organization }}</td>
                            <td> {{ $partner->meal_name }} </td>
                            <td><img src="{{ asset('uploads/meal/' . $partner->meal_image) }}" class="img-thumbnail" width="150px" height="150px"  alt="Images"></td>
                            <td>{{ $partner->partners->partnership_timeline }}</td>
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

