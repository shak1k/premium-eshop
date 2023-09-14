@extends('website.master')

@section('body')
    <!-- Breadcrumbs -->
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
    <!-- Breadcrumbs End -->

    <section class="main-container col2-right-layout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-title">
                        <h2>Checkout</h2>
                    </div>
                    <div class="card card-body">
                        <form action="{{route('order.new')}}" method="POST">
                            @csrf
                            <div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    @if(isset($customer->id))
                                        <input type="text" class="form-control" value="{{$customer->name}}" readonly/>
                                    @else
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name Here"/>
                                    @endif
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    @if(isset($customer->id))
                                        <input type="text" class="form-control" value="{{$customer->email}}" readonly/>
                                    @else
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address Here"/>
                                    @endif
                                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile Number</label>
                                    @if(isset($customer->id))
                                        <input type="text" class="form-control" value="{{$customer->mobile}}" readonly/>
                                    @else
                                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number Here"/>
                                    @endif
                                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Delivery Address</label>
                                    <textarea class="form-control" id="address" name="delivery_address" rows="3" placeholder="Enter Your Delivery Address Here"></textarea>
                                    <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label><input type="radio" name="payment_type" value="Cash" checked/>  Cash On Delivery (COD) Payment</label>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-danger w-100" value="Confirm Your Order"/>
                                </div>
                            </div>
                        </form>
                    </div>
{{--                    <div class="card card-body">--}}
{{--                    <form action="{{route('pay')}}" method="POST">--}}
{{--                        @csrf--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="name" class="form-label">Full Name</label>--}}
{{--                                @if(isset($customer->id))--}}
{{--                                    <input type="text" class="form-control" value="{{$customer->name}}" readonly/>--}}
{{--                                @else--}}
{{--                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name Here"/>--}}
{{--                                @endif--}}
{{--                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="email" class="form-label">Email Address</label>--}}
{{--                                @if(isset($customer->id))--}}
{{--                                    <input type="text" class="form-control" value="{{$customer->email}}" readonly/>--}}
{{--                                @else--}}
{{--                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address Here"/>--}}
{{--                                @endif--}}
{{--                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="mobile" class="form-label">Mobile Number</label>--}}
{{--                                @if(isset($customer->id))--}}
{{--                                    <input type="text" class="form-control" value="{{$customer->mobile}}" readonly/>--}}
{{--                                @else--}}
{{--                                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number Here"/>--}}
{{--                                @endif--}}
{{--                                <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="address" class="form-label">Delivery Address</label>--}}
{{--                                <textarea class="form-control" id="address" name="delivery_address" rows="3" placeholder="Enter Your Delivery Address Here"></textarea>--}}
{{--                                <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <label><input type="radio" name="payment_type" value="Online" checked/> Online Payment</label>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <input type="submit" class="btn btn-danger w-100" value="Confirm Your Order"/>--}}
{{--                            </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-checkout block">
                        <div class="sidebar-bar-title">
                            <h3>Cart Summary</h3>
                        </div>
                        <div class="block-content">
                            <dl>
                                <dt class="sidebar-bar-title">Product Added:</dt>
                                @php($sum=0)
                                @foreach($cart_products as $cart_product)
                                    <dd class="complete">
                                        <h5 class="value">{{$cart_product->name}}</h5>
                                        <strong class="price">BDT {{$cart_product->price}} * {{$cart_product->qty}} Pc/s = {{$cart_product->price * $cart_product->qty}} ৳</strong>
                                    </dd>
                                    @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                                @endforeach

                                <dt class="sidebar-bar-title"> Subtotal Price:</dt>
                                <span class="price"><h4>{{number_format($sum)}} ৳</h4></span>
                                @php($tax = $sum * 0.15)
                                <dt class="sidebar-bar-title"> Tax Amount (15%):</dt>
                                <span class="price"><h4>{{number_format($tax)}} ৳</h4></span>
                                <dt class="sidebar-bar-title"> Shipping Charge:</dt>
                                <span class="price"><h4>{{ $shipping = 100  }} ৳</h4></span>
                                <dt class="sidebar-bar-title"> Total Payable:</dt>
                                <span class="price"><h3 class="text-danger">{{ number_format( ($shipping + $tax +  $sum) ) }} ৳</h3></span>
                            </dl>
                            <?php
                            Session::put('order_total',( $shipping + $tax +  $sum));
                            Session::put('tax_total', $tax);
                            Session::put('shipping_total', $shipping);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="jtv-service-area">
        <div class="container">
            <div class="row">
                <div class="col col-md-3 col-sm-6 col-xs-12">
                    <div class="block-wrapper ship">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                            <div class="service-wrapper">
                                <h3>Free Shipping</h3>
                                <p>On order over ৳ 1000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-6 col-xs-12 ">
                    <div class="block-wrapper return">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                            <div class="service-wrapper">
                                <h3>100% secure payments</h3>
                                <p>Credit/Debit Card/Banking </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-6 col-xs-12">
                    <div class="block-wrapper support">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                            <div class="service-wrapper">
                                <h3>Support 24/7</h3>
                                <p>Call us: ( +880 ) 016 10076367</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-6 col-xs-12">
                    <div class="block-wrapper user">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                            <div class="service-wrapper">
                                <h3>Member Discount</h3>
                                <p>25% on order over ৳ 10,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
