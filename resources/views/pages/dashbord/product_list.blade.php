@extends('index')
@section('titel')
product list
@endsection
@section('content')
 <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Product List</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Islam Abdelkarim</td>
                                                <td>chief executive officer (CEO)</td>
                                                <td>Egypt</td>
                                                <td>20</td>
                                                <td>28/7/2022</td>
                                                <td>$300,000</td>
                                            </tr>
                                            <tr>
                                                <td>Mahmoud Abdelkarim</td>
                                                <td>web dev</td>
                                                <td>Egypt</td>
                                                <td>18</td>
                                                <td>28/7/2022</td>
                                                <td>$12</td>
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