<!DOCTYPE html>
<html lang="en">

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

<body class="bg-light">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " id="ftco-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto" style="font-family: cursive">
                    
                    <li class="nav-item"><a href="order-list" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                    <li class="nav-item active"><a href="blog-list" class="nav-link">Blogs</a></li>
                    <li class="nav-item"><a href="cart/cart" class="nav-link"><i class="fa-solid fa-cart-plus text-warning"></i></a></li>
                    <li class="nav-item"><a href="payment-list" class="nav-link">Payments</a></li>
                    <li class="nav-item"><a href="add-menu" class="nav-link">Add Menu</a></li>
                    @if(auth()->check())
                    <li class="nav-item"><a href="logout" class="nav-link">Log Out</a> </li>
                    @else
                    <li class="nav-item "><a href="login" class="nav-link">Login</a></li>
                  @endif
                </ul>
            </div>
        </div>
    </nav>

    <section class="h-100" >
        <div class="container">
            <div class="row blog-entry " style="margin-top:150px">
                <form action="add-blog" method="POST" enctype="multipart/form-data" id="blogForm" class="">
                    @csrf
                    <h2 class="text-dark text-center">Blog table</h2>
                   
                    <div class="form-group">
                        <input  type="file" name="cover_image" class="form-control text-center" placeholder="Cover-image" id="file">
                        @error('cover_image')
                        <span class="alert alert-danger">{{ $message }}</span>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="date" name="date" class="form-control text-center" placeholder="Enter date" id="date">
                        @error('date')
                        <span class="alert alert-danger">{{ $message }}</span>
                            
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <textarea cols="30" rows="3"  name="content" class="form-control text-dark" placeholder="Write content" id="content"></textarea>
                        @error('content')
                        <span class="alert alert-danger">{{ $message }}</span>
                            
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="title" class="form-control text-center" placeholder="Enter title" id="list"> 
                        @error('title')
                        <span class="alert alert-danger">{{ $message }}</span>

                        @enderror
                    </div>
               
                        <button type="submit" class="btn btn-lg btn-success py-3 px-4  " id="btn">Submit</button>
                </form>
            </div>
        </div>
    </section>
        
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/blog-list.js') }}"></script>