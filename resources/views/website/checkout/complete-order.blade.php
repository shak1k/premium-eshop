@extends('website.master')

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>&raquo;</span></li>
                        <li><strong>Checkout</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h2>Checkout - Order Completed</h2>
                    </div>
                    <div class="card card-body">
                        <h4 class="text-center text-danger"><strong>{{session('message')}}</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
