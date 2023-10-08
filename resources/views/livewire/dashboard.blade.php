<div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- sales  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Sales</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">${{$sales}}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        {{-- <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span> --}}
                    </div>
                </div>
            </div>
        </div>
  
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">New Customer</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$users}}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        {{-- <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Visitor</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">13000</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        {{-- <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Total Orders</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$orders->count()}}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                        {{-- <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span> --}}
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-light">
                <tr class="border-0">
                    <th class="border-0">#</th>
                    <th class="border-0">Image</th>
                    <th class="border-0">Product Name</th>
                    <th class="border-0">Product Id</th>
                    <th class="border-0">Quantity</th>
                    <th class="border-0">Price</th>
                    <th class="border-0">Order Time</th>
                    <th class="border-0">Customer</th>
                    <th class="border-0">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>
                        <div class="m-r-10"><img src="{{asset('photos/'.$order->product->image->image[0])}}" alt="user" class="rounded" width="45"></div>
                    </td>
                    <td>{{$order->product->title}} </td>

                    <td>{{$order->product_id}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>${{$order->total_price}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->user->first_name}} {{$order->user->last_name}} </td>
                    <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                </tr>
                @endforeach 
                    <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>