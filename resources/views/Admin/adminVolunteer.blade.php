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
                    <h3 class="card-title mt-1"> Volunteer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Volunteer Name</th>
                            <th>Member Name</th>
                            <th>Member Meal</th>
                            <th>Meber Address</th>
                            <th>Partner Name</th>
                            <th>Partner Address</th>
                            <th>Type of Meal</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                  </thead>
                  <tbody>
                    @foreach ($volunteerMember as $meal)
                        <tr>
                            <td>{{ $meal->id }}</td>
                            <td>{{ $meal->volunteer_name }}</td>
                            <td>{{ $meal->member_name }}</td>
                            <td>{{ $meal->meal_name }}</td>
                            <td>{{ $meal->member_address }}</td>
                            <td>{{ $meal->partner_organizations }}</td>
                            <td>{{ $meal->partner_address }}</td>
                            <td>{{ $meal->type_of_meal }}</td>
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
