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
                    <li class="nav-item active"><a href="login" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="order-list" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="add-menu" class="nav-link">Add Menu</a></li>
                    <li class="nav-item"><a href="" class="nav-link"></a>Log Out </li>




                </ul>
            </div>
        </div>
    </nav>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">List Of Users!</h1>
               
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top: 10px;padding-bottom: 10px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h4 class="text-center">List of Users</h4>
            </div>
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}" id="Table">
                    <thead class="thead-dark">
                        <tr>
                        <th>sn</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>

                   {{-- @foreach ($users as $user)
                       
                 
                    <tbody>

                        <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->phone }}</td>
                      
                    </tr> 
                    </tbody>
                    @endforeach --}}
                </table>
            </div>
        </div>
    </div>
               
</section>

 

<x-footer>

</x-footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/user.js') }}"></script>


