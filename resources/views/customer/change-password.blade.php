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
                        <h4>Password can be changed here.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
