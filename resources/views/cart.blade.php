<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="{{asset('app/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/styles.css')}}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{asset('app/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/magnific-popup.css')}}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{Cart::content()->count()}}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">${{Cart::total()}}</h4>
                            <br>
                            <a href="/ecom/public/index/cart">
                            <div class="btn btn-small btn--dark">
                                <span class="text">View Cart</span>
                            </div>
                        </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>

<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                    <p class="heading-text">Buy books, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    <div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="cart">

                        <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary"> {{Cart::content()->count()}} items</span></h1>

                    </div>

                    <form action="#" method="post" class="cart-main">

                        <table class="shop_table cart">
                            <thead class="cart-product-wrap-title-main">
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach(Cart::content() as $pdt)
                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="\ecom\public\index\productdelete\{{$pdt->rowId}}" class="product-del remove" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                        <a href="#">
                                            <img src="\ecom\storage\app\{{$pdt->model->image}}" width="80px" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                        </a>
                                        <div class="cart-product-content">
                                            <h5 class="cart-product-title">{{$pdt->name}}</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h5 class="price amount">${{$pdt->price}}</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        <a href="productdecr\{{$pdt->rowId}}\{{$pdt->qty}}" class="quantity-minus">-</a>
                                        <input title="Qty" class="email input-text qty text" type="text" value="{{$pdt->qty}}" placeholder="1" readonly>
                                        <a href="productincr\{{$pdt->rowId}}\{{$pdt->qty}}" class="quantity-plus">+</a>
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h5 class="total amount">${{$pdt->total()}}</h5>
                                </td>

                            </tr>

                            @endforeach
                            

                            <tr>
                                <td colspan="5" class="actions">

                                    <div class="coupon">
                                        <input name="coupon_code" class="email input-standard-grey" value="" placeholder="Coupon code" type="text">
                                        <div class="btn btn-medium btn--breez btn-hover-shadow">
                                            <span class="text">Apply Coupon</span>
                                            <span class="semicircle--right"></span>
                                        </div>
                                    </div>

                                    <div class="btn btn-medium btn--dark btn-hover-shadow">
                                        <span class="text">Apply Coupon</span>
                                        <span class="semicircle"></span>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>


                    </form>

                    <div class="cart-total">
                        <h3 class="cart-total-title">Cart Totals</h3>
                        <h5 class="cart-total-total">Total: <span class="price">${{Cart::total()}}</span></h5>
                        <a href="/ecom/public/index/checkout" class="btn btn-medium btn--light-green btn-hover-shadow">
                            <span class="text">Checkout</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{asset('app/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('app/js/crum-mega-menu.js')}}"></script>
<script src="{{asset('app/js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('app/js/theme-plugins.js')}}"></script>
<script src="{{asset('app/js/main.js')}}"></script>
<script src="{{asset('app/js/form-actions.js')}}"></script>

<script src="{{asset('app/js/velocity.min.js')}}"></script>
<script src="{{asset('app/js/ScrollMagic.min.js')}}"></script>
<script src="{{asset('app/js/animation.velocity.min.js')}}"></script>

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>