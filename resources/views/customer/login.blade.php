@extends('website.master')

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>&raquo;</span></li>
                        <li><strong>Customer Account</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <section class="main-container col1-layout align-content-center">
        <div class="main container">
            <div class="page-content">
                <div class="account-login">
                    <div class="box-authentication col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                        <h4>Customer Login</h4>
                        <p class="text-danger">{{session('message')}}</p>
                        <p class="before-login-text">Welcome back! Sign in to your account now.</p>
                        <form class="row" action="{{route('customer.login')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label class="inline">Mobile Number<span class="required">*</span></label>
                                    <input class="form-control w-100" type="number" name="mobile" id="mobile" required/>
                                </div>
                            <div class="form-group">
                                <label class="inline">Password<span class="required">*</span></label>
                                <input class="form-control w-100" type="password" name="password" id="password" required/>
                            </div>
{{--                                <p class="forgot-pass"><a href="#">Lost your password?</a></p>--}}
                                <button class="button w-100" type="submit"><i class="icon-lock icons"></i>&nbsp; <span>Login</span></button>
                        </form>
                    <br>
                    <h5>Are you a new customer? <a href="{{route('customer.registration')}}"><b class="text-danger">Register Now!</b></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

