@extends('admin.master')

@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Order Info</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL No</th>
                                <th class="wd-15p border-bottom-0">Order No</th>
                                <th class="wd-20p border-bottom-0">Customer Info</th>
                                <th class="wd-15p border-bottom-0">Order Date</th>
                                <th class="wd-10p border-bottom-0">Order Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>00{{$order->id}}</td>
                                    <td>{!! 'Name : '. $order->customer->name.'<br/>'.'Mobile : '.$order->customer->mobile !!}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>
                                        <a href="{{route('admin.order-detail', ['id' => $order->id])}}" title="Order Detail" class="btn btn-info btn-sm">
                                            <i class="fa fa-bookmark-o"></i>
                                        </a>
                                        <a href="{{route('admin.order-edit', ['id' => $order->id])}}" title="Order Edit" class="btn btn-sm {{$order->order_status == 'Complete' ? 'disabled btn-secondary' : 'btn-success'}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" title="Order Invoice" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dollar"></i>
                                        </a>
                                        <a href="{{route('admin.download-order-invoice', ['id' => $order->id])}}" target="_blank" title="Download Order Invoice" class="btn btn-warning btn-sm">
                                            <i class="fa fa-print"></i>
                                        </a>
                                        <a href="{{route('admin.order-delete', ['id' => $order->id])}}" title="Delete Order" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-sm {{$order->order_status == 'Cancel' ? 'btn-danger' : 'disabled btn-secondary'}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
