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
                                <th>Age </th>
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
                                    <td>{{ $user->profile->phone }}</td>
                                    <td>{{ $user->profile->age }}</td>
                                    <td>{{ $user->profile->country }}</td>
                                    <td>
                                        @if ($user->profile->role == 'Admin')
                                            <span class='label label-lg label-danger'>{{ $user->profile->role }}</span>
                                        @elseif ($user->profile->role == 'User')
                                            <span class='label label-lg label-success'>{{ $user->profile->role }}</span>
                                        @else
                                            <span class='label label-lg label-primary'>{{ $user->profile->role }}</span>
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
@push('js')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/data-table.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
@endpush