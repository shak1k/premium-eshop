@extends('website.master')

@section('body')

    <!-- Breadcrumbs -->

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="{{route('home')}}">Home</a><span>&raquo;</span></li>
                        <li><strong>Registration</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="page-content">
                <div class="account-login">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                            <div class="title">
                                <h4>Customer Registration</h4>
                                <p>Welcome! Create your free account now.</p>
                            </div>
                            <form class="row" action="{{route('customer.registration')}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="reg-fn">Your Full Name</label>
                                        <input class="form-control" type="text" id="reg-fn" name="name" required/>
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="reg-email">Email Address</label>
                                        <input class="form-control" type="email" name="email" id="reg-email" required>
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="reg-phone">Mobile Number</label>
                                        <input class="form-control" type="number" name="mobile" id="reg-phone" required>
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="reg-pass">Password</label>
                                        <input class="form-control" type="password" name="password" id="reg-pass" required>
                                        <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                                    </div>
                                </div>
                                <div>
                                    <br>
                                    <button class="button" type="submit"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                                </div>
                            </form>
                            <br>
                            <h5>Already have an account? <a href="{{route('customer.login')}}"><b class="text-danger">Login Now!</b></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->


@endsection

