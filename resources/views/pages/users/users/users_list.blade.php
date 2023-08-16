@extends('index')
@section('titel')
    Users list
@endsection
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Users List</h5>

            </div>
            <div>
                <a href="{{ route('UsersList.create') }}" class="btn btn-rounded btn-primary">Add Users</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Done!</strong> {{ session('success') }}!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone </th>
                                <th>Country</th>
                                <th>Access Role </th>
                                <th>Join At</th>
                                <th>View Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    {{-- <td>{{ $user->age }}</td> --}}
                                    <td>{{ $user->country }}</td>
                                    <td>
                                        @if ($user->role == 'Admin')
                                            <span class='label label-lg label-danger'>{{ $user->role }}</span>
                                        @elseif ($user->role == 'User')
                                            <span class='label label-lg label-success'>{{ $user->role }}</span>
                                        @else
                                            <span class='label label-lg label-primary'>{{ $user->role }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('UsersList.show', ['UsersList' => $user->id]) }}"
                                            class="btn btn-sm btn-outline-primary">View Details</a>

                                    </td>
                                    <td>
                                        <a href="{{ route('UsersList.edit', ['UsersList' => $user->id]) }}"
                                            class="btn btn-sm btn-outline-dark"><i class="far fa-edit"></i></a>
                                        <form action="{{ route('UsersList.destroy', ['UsersList' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-outline-danger"type="submit" name='trash'> <i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end data table  -->
    <!-- ============================================================== -->
@stop
