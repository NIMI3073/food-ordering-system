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
                 
                    <li class="nav-item"><a href="blog-list" class="nav-link">blogs</a></li>
                    <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="cart-list" class="nav-link"><i class="fa-solid fa-cart-plus text-warning"></i></a></li>
                    <li class="nav-item"><a href="payment-list" class="nav-link">Payments</a></li>
                    <li class="nav-item"><a href="add-menu" class="nav-link">Add Menu</a></li>
                    <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
                
                    @if(auth()->check())
                    <li class="nav-item"><a href="logout" class="nav-link">LogOut</a></li>
                        @else

                        <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
                        
                  @endif




                </ul>
            </div>
        </div>
    </nav>


<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:120px" >
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark mt-5 px-4 align-items-center justify-content-center">
                {{-- <h2 class="text-center"><strong>The blogs</strong></h2> --}}
            </div>
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center ">
               <div class=" text-dark text-center">
                {{-- <p>Cover-image: {{ $content->cover_image }}</p> --}}
                <p><strong>Content: {{ $content->content }}</</strong></p>
                <p><strong>Date:  {{ $content->date}}</strong> </p>
                <p> <strong>Title: {{ $content->title}}</strong> </p>
               </div>
                          
              
        </div>
        
    <form action="{{ route ('edit-content') }}" method="POST" style="margin-top:10px;position:relative;left:23em" id="editForm">
        @csrf
        <div class="align-items-center justify-content-center">
            <textarea rows="5" class="form-control textarea" cols="40" name="question" id="content">{{ $content->content }}</textarea>
            <input type="hidden" name="id" id="editId" value="{{ $content->id }}">
        </div>
        
        <button type="submit" class="btn btn-primary text-white px-4 mt-3"style="position:relative;left:8em">Update</button>
        @if(isset($success))
        <div style="color: rgb(4, 48, 4); margin-left:30px">
          {{ $success }}
        </div>
        @endIf

        </form>
    </div>
</div>
               
</section>

 

{{-- <x-footer>

</x-footer> --}}
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>

<script src="{{ asset('js/edit-content.js') }}"></script>

