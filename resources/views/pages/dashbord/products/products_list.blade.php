@extends('index')
@section('titel')
    Products list
@endsection
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Products List</h5>

            </div>
            <div>
                <a href="{{ route('Products.create') }}" class="btn btn-rounded btn-primary">Add product</a>
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
                                <th>title</th>  
                                <th>price </th>
                                <th>availability </th>
                                <th>quantity</th>
                                <th>category</th>
                                <th>View Details</th>
                                <th>Actions</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->availability }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->category->category_name }}</td>
                                
                                    <td>
                                        <a href="{{ route('Products.show', ['Product' => $product->id]) }}"
                                            class="btn btn-sm btn-outline-primary">View Details</a>

                                    </td>
                                    <td>
                                        <a href="{{ route('Products.edit', ['Product'=>$product->id]) }}"
                                            class="btn btn-sm btn-outline-dark"><i class="far fa-edit"></i></a>
                                        <form action="{{ route('Products.destroy', ['Product' => $product->id]) }}"
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
