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
                    <h3 class="card-title mt-1"> Member</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Member Name</th>
                            <th>Member Address</th>
                            <th>Member Phone Number</th>
                            <th>Member purchase Meal</th>
                            <th>Meal Image</th>
                            <th>Type of Meal</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                  </thead>
                  <tbody>
                    @foreach ($memberOrder as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->member_name }}</td>
                            <td>{{ $member->member_address }}</td>
                            <td>{{ $member->member_phone }}</td>
                            <td>{{ $member->meal_name }}</td>
                            <td>
                                <img src="{{ asset('uploads/order/' . $member->meal_image) }}" class="img-thumbnail" width="150px" height="150px"  alt="Images">
                            </td>
                            <td>{{ $member->type_of_meal }}</td>
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
