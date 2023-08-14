@extends('index')
@section('content')
 <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Customer List</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>phone</th>
                                                <th>Country</th>
                                                <th>join at</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ali </td>
                                                <td>ali@gmail.com</td>
                                                <td>011123243</td>
                                                <td>giza</td>
                                                <td>10/10/2022</td>
                                            <td>
                                                <form action="">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                             
                                            </tr>
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