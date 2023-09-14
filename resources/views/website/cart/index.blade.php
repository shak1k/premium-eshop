@extends('website.master')

@section('body')
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">

                    <div class="page-content page-order"><div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>

                        <h3 class="text-center text-danger">{{session('message')}}</h3>

                        <div class="order-detail-content col-12">
                            <div class="table-responsive ">
                                <table class="table table-bordered cart_summary">
                                    <thead>
                                    <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Description</th>
                                        <th>Availability</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                        <th  class="action"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum=0)
                                    @foreach($cart_products as $cart_product)
                                    <tr>
                                        <td class="cart_product"><a href="{{route('product-details', ['id' => $cart_product->id])}}"><img src="{{asset($cart_product->options->image)}}" alt="" height="100"></a></td>
                                        <td class="cart_description"><p class="product-name"><a href="{{route('product-details', ['id' => $cart_product->id])}}">{{$cart_product->name}}</a></p>
                                            <small><a href="#">Category: <b>{{$cart_product->options->category}}</b></a></small>
                                            <small><a href="#">Brand: <b>{{$cart_product->options->brand}}</b></a></small></td>
                                        <td class="availability in-stock"><span class="label">Stock</span></td>
                                        <form action="{{route('cart.update', ['id' =>$cart_product->rowId])}}" method="POST">
                                            @csrf
                                        <td class="cart_product">
                                            <input class="form-control input-sm" type="number" name="qty" value="{{$cart_product->qty}}" min="1">
                                            <input class="form-control input-sm" type="hidden" name="id" value="{{$cart_product->id}}" min="1">
                                            <button type="submit" class="btn btn-danger btn-sm">Update Amount</button>
                                        </td>
                                        </form>
                                        <td class="price"><span>৳ {{$cart_product->price}}</span></td>
                                        <td class="price"><span>৳ {{$cart_product->price * $cart_product->qty}}</span></td>
                                        <td class="action"><a onclick="return confirm('Are you sure to delete this item?')" href="{{route('cart.delete', ['id' =>$cart_product->rowId])}}"><i class="icon-close"></i></a></td>
                                    </tr>
                                    @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="5">Cart Subtotal</td>
                                        <td colspan="2">BDT {{number_format($sum)}}</td>
                                    </tr>
                                    <tr>
                                        @php($tax = $sum * 0.15)
                                        <td colspan="5">Tax Amount (15%)</td>
                                        <td colspan="2">BDT {{number_format($tax)}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Shipping Charge</td>
                                        <td colspan="2">BDT {{ $shipping = 100  }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><strong>Total Payable</strong></td>
                                        <td colspan="2"><strong>BDT {{ number_format( ($shipping + $sum +  $tax) ) }}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="cart_navigation"> <a class="continue-btn" href="{{route('home')}}"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="{{route('checkout')}}"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
