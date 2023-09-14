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
                        <h2>Checkout</h2>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="card card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Password</label>
                                <input type="password" class="form-control" id="name" name="name" placeholder="Enter Your Password"/>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100" value="Confirm Order"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
