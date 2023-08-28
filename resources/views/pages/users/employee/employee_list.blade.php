@extends('index')
@section('titel')
Employee list
@endsection
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Employee List</h5>

            </div>
            <div>
                <a href="{{ route('EmployeeList.create') }}" class="btn btn-rounded btn-primary">Add Employee</a>
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
                                <th>phone</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Gender</th>
                                <th>Birth Day</th>
                                <th>Salary</th>
                                <th>Start date</th>
                                <th>View Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->office }}</td>
                                    <td>{{ $employee->country }}</td>
                                    <td>{{ $employee->city }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->birthDay }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->created_at }}</td>
                                    <td>
                                        <a href="{{ route('EmployeeList.show', ['EmployeeList' => $employee->id]) }}"
                                            class="btn btn-sm btn-outline-primary">View Details</a>
                                     
                                    </td>
                                    <td>
                                        <a href="{{ route('EmployeeList.edit', ['EmployeeList' => $employee->id]) }}"
                                            class="btn btn-sm btn-outline-dark"><i
                                            class="far fa-edit"></i></a>
                                        <form action="{{route('EmployeeList.destroy',['EmployeeList'=>$employee->id])}}" method="post">
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