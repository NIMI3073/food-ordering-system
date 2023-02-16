<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->


    <head>
        <title>Foodie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
            rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css"
            integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    
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
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="order-list" class="nav-link">Orders</a></li>
                        <li class="nav-item"><a href="blog-list" class="nav-link">Blogs</a></li>
                        <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                        <li class="nav-item"><a href="cart-list" class="nav-link"><i class="fa-solid fa-cart-plus text-warning"></i></a></li>
                        <li class="nav-item"><a href="payment-list" class="nav-link">Payments</a></li>
                        <li class="nav-item"><a href="add-menu" class="nav-link">Add Menu</a></li>
                        <li class="nav-item"><a href="add-blog" class="nav-link">Add New Blog</a></li>
                    
                        @if(auth()->check())
                        <li class="nav-item"><a href="logout" class="nav-link">LogOut</a></li>
                            @else
    
                            <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
                            
                      @endif
    
    
    
    
                    </ul>
                </div>
            </div>
        </nav>
</div>