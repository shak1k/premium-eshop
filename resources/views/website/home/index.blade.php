@extends('website.master')

{{--@section('header')--}}

{{--    <div class="col-md-3 col-sm-3 mega-container hidden-xs">--}}
{{--        <div class="navleft-container">--}}
{{--            <div class="mega-menu-title">--}}
{{--                <h3><span>All Categories</span></h3>--}}
{{--            </div>--}}
{{--            <!-- Shop by category -->--}}
{{--            <div class="mega-menu-category">--}}
{{--                <ul class="navleft-container">--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <li><a href="{{route('product-category', ['id' => $category->id])}}">{{$category->name}}</a>--}}
{{--                            <div class="wrap-popup">--}}
{{--                                <div class="popup">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-4 col-sm-6">--}}
{{--                                            <h3>Online store</h3>--}}
{{--                                            @if(count($category->subCategory)>0)--}}
{{--                                                <ul class="nav-inner">--}}
{{--                                                    @foreach($category->subCategory as $subCategory)--}}
{{--                                                        <li><a href="{{route('product-sub-category', ['id' => $subCategory->id])}}">{{$subCategory->name}}</a></li>--}}
{{--                                                    @endforeach--}}
{{--                                                </ul>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4 has-sep hidden-sm">--}}
{{--                                            <div class="custom-menu-right">--}}
{{--                                                <div class="box-banner menu-banner">--}}
{{--                                                    <div class="add-right"><a href="#"><img src="" alt="responsive"></a></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

@section('body')

    <!-- Slideshow  -->
    <div class="main-slider" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-3 top-banner hidden-sm">
                                <div class="jtv-banner3">
                                    <div class="jtv-banner3-inner"><a href="#"><img src="{{asset('/')}}website/assets/images/sub1.jpg" alt="" height="500"></a>
                                        <div class="hover_content">
                                            <div class="hover_data">
                                                <div class="title"> Big Sale!</div>
                                                <div class="desc-text">SHAKiK'z eShop Exclusive</div>
                                                <div class="desc-text">Up to 75% off</div>
                                                <span>Camera, Laptop & Mobile</span>
                                                <p><a href="#" class="shop-now">Get it now!</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
                    <div id="jtv-slideshow">
                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                <ul>
                                    <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{asset('/')}}website/assets/images/slider/slide-3.jpg" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="caption-inner">
                                            <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='250'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>SHAKiK'z Premium eShop</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>Premium Items</div>
                                            <div class='tp-caption' data-x='310'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'>Now Available in Stock. Don't Miss.</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-x='370'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Grab Now</a> </div>
                                        </div>
                                    </li>
                                    <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{asset('/')}}website/assets/images/slider/slide-1.jpg" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="caption-inner left">
                                            <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Smooth, Rich & Loud Audio</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Headphones</div>
                                            <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>World's most advanced Wireless Earbuds are Available Here</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-x='72'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Explore Now</a> </div>
                                        </div>
                                    </li>
                                    <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{asset('/')}}website/assets/images/slider/slide-2.jpg" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="caption-inner left">
                                            <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>
                                            <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Available Now. Under favorable smartwatches.</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying</a> </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section -->
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
                                <p>Credit/Debit Card/Banking</p>
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

                <!-- Best Sale -->
    <div class="inner-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9jtv-best-sale special-pro">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Featured Products</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
                @foreach($trending_products as $trending_product)
                    <div class="product-item col-lg-2 col-md-6 col-12 my-2">
                        <div class="item-inner h-100">
                            <div class="product-thumbnail">
                                <div class="icon-new-label new-left">Trending 🔥</div>
                                <div class="pr-img-area"> <a title="{{$trending_product->category->name}}" href="{{route('product-details', ['id' => $trending_product->id])}}">
                                        <figure><img class="first-img" src="{{asset($trending_product->image)}}" alt="" height="200"> <img class="hover-img" src="{{asset($trending_product->image)}}" alt="" height="400"></figure>
                                    </a> </div>
                                <div class="pr-info-area">
                                    <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="#"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="#"> <i class="fa fa-search"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="{{$trending_product->name}}" href="{{route('product-details', ['id' => $trending_product->id])}}">{{$trending_product->name}}</a> </div>
                                    <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">BDT {{$trending_product->selling_price}}</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                            <form action="{{route('cart.add', ['id' => $trending_product->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty"/>
                                                <button type="submit" class="add-to-cart"><span>Add to Cart</span> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    <!-- All products-->

    <div class="container">
        <div class="home-tab">
            <div class="tab-title text-left">
                <h2>Best Selling Products</h2>
            </div>
            @foreach($trending_products as $trending_product)
                    <div class="featured-pro">
                        <div class="row col-lg-2 col-md-6 col-12 my-2">
                                    <div class="product-item">
                                        <div class="item-inner h-100">
                                            <div class="product-thumbnail">
                                                <div class="icon-new-label new-left">Hot</div>
                                                <div class="pr-img-area"> <a title="{{$trending_product->name}}" href="{{route('product-details', ['id' => $trending_product->id])}}">
                                                        <figure> <img class="first-img" src="{{asset($trending_product->image)}}" alt="" height="150"> <img class="hover-img" src="{{asset($trending_product->image)}}" alt="" height="300"></figure>
                                                    </a> </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="#"> <i class="fa fa-heart-o"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="#"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="{{$trending_product->name}}" href="{{route('product-details', ['id' => $trending_product->id])}}">{{$trending_product->name}}</a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">৳ {{$trending_product->selling_price}}</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <form action="{{route('cart.add', ['id' => $trending_product->id])}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" value="1" name="qty"/>
                                                                <button type="submit" class="add-to-cart"><span>Grab Now</span> </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            @endforeach
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="daily-deal-section">
                <!-- daily deal section-->
                <div class="col-md-7 daily-deal">
                    <h3 class="deal-title">Deal of the day</h3>
                    <div class="title-divider"><span></span></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa eget ante tincidunt vestibulum. Aenean vel metus magna. Mauris nec. Nunc congue ac libero ut lacinia. In ultrices
                        elementum ipsum, in tempus enim accumsan.. </p>
                    <div class="hot-offer-text">SHAKiK'z eShop Exclusive Sale <span>2023</span></div>
                    <div class="box-timer"> <span class="des-hot-deal">Hurry up! Special offer</span>
                        <div class="time" data-countdown="countdown" data-date="09-30-2023-10-20-50"></div>
                        <a href="#" class="link">Shopping Now</a> </div>
                </div>
                <div class="col-md-5 hot-pr-img-area">
                    <div id="daily-deal-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 ">
                            <div class="pr-img-area"> <a title="Product title here" href="#">
                                    <figure> <img class="first-img" src="{{asset('/')}}website/assets/images/products/product-25.jpg" alt="HTML template"></figure>
                                </a> </div>
                            <div class="pr-img-area"> <a title="Product title here" href="#">
                                    <figure> <img class="first-img" src="{{asset('/')}}website/assets/images/products/product-22.jpg" alt="HTML template"> </figure>
                                </a> </div>
                            <div class="pr-img-area"> <a title="Product title here" href="#">
                                    <figure> <img class="first-img" src="{{asset('/')}}website/assets/images/products/product-26.jpg" alt="HTML template"> </figure>
                                </a> </div>
                            <div class="pr-img-area"> <a title="Product title here" href="#">
                                    <figure> <img class="first-img" src="{{asset('/')}}website/assets/images/products/product-27.jpg" alt="HTML template"> </figure>
                                </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <figure> <a href="#" target="_self" class="image-wrapper"><img src="{{asset('/')}}website/assets/images/banner-laptop.jpg" alt="banner laptop"></a></figure>
                </div>
                <div class="col-sm-6">
                    <figure> <a href="#" target="_self" class="image-wrapper"><img src="{{asset('/')}}website/assets/images/banner-mob.jpg" alt="banner moblie"></a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-products">
        <div class="container">
            <div class="row">

                <!-- Best Sale -->
                <div class="col-sm-12 col-md-4 jtv-best-sale">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Top Rated Products</h2>
                            </div>
                        </div>
                        <div class="slider-items-products">
                            <div id="toprate-products-slider" class="product-flexslider">
                                <div class="slider-items">
                                    <ul class="products-grid">
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-16.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-19.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="products-grid">
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-14.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-12.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="products-grid">
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-12.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-6.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                            </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="col-md-4 top-banner hidden-sm">
                    <div class="jtv-banner3">
                        <div class="jtv-banner3-inner"><a href="#"><img src="{{asset('/')}}website/assets/images/sub1a.jpg" alt="HTML template"></a>
                            <div class="hover_content">
                                <div class="hover_data bottom">
                                    <div class="desc-text">Top Brands at discount prices </div>
                                    <div class="title">Electronisc Sale</div>
                                    <span>Smartphone & Cell phone</span>
                                    <p><a href="#" class="shop-now">Get it now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 jtv-best-sale">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Latest Products</h2>
                            </div>
                        </div>
                        <div class="slider-items-products">
                            <div id="new-products-slider" class="product-flexslider">
                                <div class="slider-items">
                                    <ul class="products-grid">
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-9.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-2.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                            </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="products-grid">
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-18.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-11.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                            </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="products-grid">
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-6.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="{{asset('/')}}website/assets/images/products/product-9.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                                            </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <!-- Blog -->
    <section class="blog-post-wrapper">
        <div class="container">
            <div class="best-title text-left">
                <h2>Our Latest News</h2>
            </div>
            <div class="slider-items-products">
                <div id="latest-news-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        <div class="item">
                            <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('/')}}website/assets/images/blog-img1.jpg" alt="HTML template"></a>
                                <div class="blog-btm-desc">
                                    <div class="blog-top-desc">
                                        <div class="blog-date"> 28 Jan 2023 </div>
                                        <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                                        <div class="jtv-entry-meta"> <i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>15 Comments</strong></a></div>
                                    </div>
                                    <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, Mauris fermentum dictum.</p>
                                    <a class="read-more" href="#"> Read More</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('/')}}website/assets/images/blog-img2.jpg" alt="HTML template"></a>
                                <div class="blog-btm-desc">
                                    <div class="blog-top-desc">
                                        <div class="blog-date"> 18 Feb 2023 </div>
                                        <h4><a href="#">Sed do eiusmod sit amet</a></h4>
                                        <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>50 Comments</strong></a></div>
                                    </div>
                                    <p> Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    <a class="read-more" href="#"> Read More</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('/')}}website/assets/images/blog-img3.jpg" alt="HTML template"></a>
                                <div class="blog-btm-desc">
                                    <div class="blog-top-desc">
                                        <div class="blog-date"> 5 Mar 2023 </div>
                                        <h4><a href="#">Integer scelerisque diam</a></h4>
                                        <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                                    </div>
                                    <p> Doloremque nam. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna.</p>
                                    <a class="read-more" href="#"> Read More</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('/')}}website/assets/images/blog-img4.jpg" alt="HTML template"></a>
                                <div class="blog-btm-desc">
                                    <div class="blog-top-desc">
                                        <div class="blog-date"> 5 May 2023 </div>
                                        <h4><a href="#">Integer scelerisque diam</a></h4>
                                        <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>05 Comments</strong></a></div>
                                    </div>
                                    <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
                                    <a class="read-more" href="#"> Read More</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('/')}}website/assets/images/blog-img5.jpg" alt="HTML template"></a>
                                <div class="blog-btm-desc">
                                    <div class="blog-top-desc">
                                        <div class="blog-date"> 06 Aug 2023 </div>
                                        <h4><a href="#">Duis ac turpis aliquam leo</a></h4>
                                        <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                                    </div>
                                    <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat.</p>
                                    <a class="read-more" href="#"> Read More</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
