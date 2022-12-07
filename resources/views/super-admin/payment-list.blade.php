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
                   
                    <li class="nav-item"><a href="order-list" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="cart/cart" class="nav-link"><i class="fa-solid fa-cart-plus text-warning"></i></a></li>
                    <li class="nav-item"><a href="payment-list" class="nav-link">Payments</a></li>
                    <li class="nav-item"><a href="add-menu" class="nav-link">Add Menu</a></li>
                 
                    @if(auth()->check())
                    <li class="nav-item"><a href="logout" class="nav-link">Log Out</a> </li>
                    @else
                    <li class="nav-item active"><a href="login" class="nav-link">Login</a></li>
                  @endif




                </ul>
            </div>
        </div>
    </nav>


{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">List Of Users!</h1>
               
            </div>
        </div>
    </div>
</section> --}}


<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:150px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h2 class="text-center text-dark">Payment List</h2>
            </div>
            <div class="col-lg-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-secondary" style="border-radius: 10px">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}">
                    <tr class="text-center text-block">
                        <thead class="bg-dark text-center">
                        <th class="text-white">Sn</th>
                        <th class="text-white">id</th>
                        {{-- <th>Menu</th> --}}
                        <th class="text-white">Transaction Id</th>
                        <th class="text-white">Transaction Ref</th>
                        <th class="text-white">Group id</th>
                        <th class="text-white">Amount</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Action</th>
                        
                    </tr>
                    </thead>
                    <tbody class="bg-dark">
                        <tr>
                        @foreach ($payments as $payment)
                        <td class="text-primary text-center">{{ $index++ }}</td>
                        {{-- <th><img src="{{ url($payment->menu->file) }}" alt="Image" class="w-100" /></th> --}}
                        <td class="text-danger text-center">{{ $payment->user_id }}</td>
                        <td class="text-primary text-center">{{ $payment->transaction_id }}</td>
                        <td class="text-danger text-center ">{{ $payment->tx_ref }}</td>
                        <td class="text-primary text-center">{{ $payment->group_id }}</td>
                        <td class="text-danger text-center ">{{ $payment->amount }}</td>
                        <td class="text-success text-center">{{ $payment->status }}</td>
                        <td ><button type="button" class="btn btn-lg btn-primary"><a href= "{{ route('payment-info') }}?group_id={{ $payment->group_id }}" class="text-white">more info</a></button> </td>
                        <tr>
                       
                      
                    </tr> 
                    
                    @endforeach
                </table>
            </div>
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
<script src="{{ asset('js/user.js') }}"></script>


