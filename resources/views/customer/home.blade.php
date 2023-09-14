@extends('website.master')

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h2 class="page-title text-danger"><b>{{Session::get('customer_name')}}</b>'s Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('customer.my-menu')
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Order Id</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Detail</a>
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
