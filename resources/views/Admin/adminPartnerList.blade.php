@extends('Admin.layouts.app')

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        {{--  Session Checking  --}}
        @if (Session::has(''))
            <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                {{ Session::get('') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- End of Session Checking --}}

        {{-- Dlete user Session Checking  --}}
        @if (Session::has('userDelete'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ Session::get('userDelete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- End of Session Checking --}}

        <div class="row">
          <div class="col-12 mt-5">
            <div class="card mt-4">
              <div class="card-header">
                <h3 class="card-title mt-1">
                    <a href="{{ route('admin#index') }}">
                        <button class="btn btn-sm btn-outline-dark">
                            <i class="fas fa-user"></i> Member List
                        </button>
                    </a>
                    <a href="{{ route('admin#partnerList') }}">
                        <button class="btn btn-sm btn-outline-dark">
                            <i class="fas fa-user-cog"></i> Partner List
                        </button>
                    </a>
                    <a href="{{ route('admin#volunteerList') }}">
                        <button class="btn btn-sm btn-outline-dark">
                            <i class="fas fa-user-cog"></i> Volunteer List
                        </button>
                    </a>
                    <a href="{{ route('admin#donorList') }}">
                        <button class="btn btn-sm btn-outline-dark">
                            <i class="fas fa-user-cog"></i> Donor List
                        </button>
                    </a>
                    <a href="{{ route('admin#adminList') }}">
                        <button class="btn btn-sm btn-outline-dark">
                            <i class="fas fa-user-cog"></i> Admin List
                        </button>
                    </a>
                </h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">

                <table class="table table-hover text-nowrap text-center">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Partner Organization Name</th>
                            <th>Partner Timeline</th>
                        </tr>
                  </thead>
                  <tbody>

                    @foreach ($partner as $p)
                        <tr>
                            <td>{{ $p->users->id }}</td>
                            <td>{{ $p->users->name}}</td>
                            <td>{{ $p->users->email}}</td>
                            <td>{{ $p->users->phone}}</td>
                            <td>{{ $p->users->address}}</td>
                            <td>{{ $p->partnership_organization }}</td>
                            <td>{{ $p->partnership_timeline }}</td>
                            {{-- <td>
                                <a href="{{ route('admin#deleteUser', $user->id) }}">
                                    <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                                </a>
                            </td> --}}
                        </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              {{-- Pagination Link Format --}}

              <div class="mt-4 d-flex justify-content-center ">
                {{ $partner->links() }}
                </div>

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
