<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('design-asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('design-asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('design-asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('design-asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('design-asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('design-asset/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('design-asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('design-asset/css/style.css') }}">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index">Food.<span class="text-info">ie</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="reservation" class="nav-link">Reservation</a></li>
                    <li class="nav-item"><a href="menu-gallery" class="nav-link">Menu Gallery</a></li>
                      <li class="nav-item"><a href="order" class="nav-link">Make Order</a></li>
                      <li class="nav-item"><a href="cart/cart" class="nav-link"><i class="fa-solid fa-cart-plus text-warning">
						<span class='text-yellow text-sm' id="cart_counter">{{ $cartCount }}</span>
						</i></a></li>
                    @if (auth()->user() === 'super_admin')
                        <li class="nav-item"><a href="order-list" class="nav-link">Order-list</a></li>
                        <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                           <li class="nav-item"><a href="menu" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="add-menu" class="nav-link">Add New Menu</a></li>
                    @endif
                      
                      @if(auth()->check())
                      <li class="nav-item"><a href="logout" class="nav-link">LogOut</a></li>
                          @else
                          <li class="nav-item"><a href="register" class="nav-link">Sign Up</a></li>
                          <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
                          
                    @endif
                   


                </ul>
            </div>
        </div>
    </nav>
