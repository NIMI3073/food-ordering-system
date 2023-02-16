<!DOCTYPE html>
<x-header>

</x-header>
{{-- <html lang="en">
<head>
	<title>Foodie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

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
					<li class="nav-item"><a href="cart/cart" class="nav-link"><i class="fa-solid fa-cart-plus text-warning">
						<span class='text-yellow text-sm' id="cart_counter">{{ $cartCount }}</span>
						</i></a></li>
						
					<li class="nav-item"><a href="menu-gallery" class="nav-link">Menu Gallery</a></li>
					<li class="nav-item"><a href="order" class="nav-link">Make Order</a></li>
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
    </nav> --}}

	<!-- END nav -->
	
	<section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">
			<div class="slider-item js-fullheight" style="background-image:url(images/section_bg03.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text  align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Food.ie Restaurant</h2></span>
								<h1>Cooking Since</h1>
								<span class="subheading-2">2020</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/section_bg04.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Foodie.ie Restaurant</h2></span>
								<h1>Best Quality</h1>
								<span class="subheading-2 sub">Food</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:20px;padding-top:5px">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info">
					<form action="#" class="appointment-form">
						<h3 class="mb-3">Book your Table</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="name" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control book_date" placeholder="Check-In">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control book_time" placeholder="Time">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Guest</option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>
												<option value="">4</option>
												<option value="">5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading">Taste</span>
									<h2 class="mb-4">Welcome to Food.ie</h2>
								</div>
							</div>
							<div class="pl-lg-3 ml-md-5">
								<p>"People who love to eat are always the best people." "To eat is a necessity, but to eat intelligently is an art." "We all eat, an it would be a sad waste of opportunity to eat badly." "If you really want to make a friend, go to someone's house and eat with him...the people who give you their food give you their heart."
									“To me, food is as much about the moment, the occasion, the location and the company as it is about the taste.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<x-menu>
		
	</x-menu>
	

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image:url(images/rst_1.jpg);background-size:cover"></div>
					{{-- <div class="img img-2 w-100 ml-md-2" style="background-image:url(images/recipe_2.jpg);"></div> --}}
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading"><big>This is our secrets</big></span>
						<h2 class="mb-4">Perfect Ingredients,Workhaolic staff,condusive environment</h2>
						<p>For dining options like no other, visit a Foodie Restaurant and let our world-class chefs take you on a journey of flavors. With 23 restaurants and counting, a wide variety of meals and snacks made from the freshest ingredients and to the highest standards remains our hallmark.</p>
							The taste is the difference🍲🍛
						</p>
						<p><a href="about" class="btn btn-danger">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<x-blog>
					
	</x-blog>

	

	{{-- <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Recent Blog</h2>
				</div>
			</div>
			<div class="row">
				

		
			
	
				<div class="col-md-4 ftco-animate">
				
					<div class="blog-entry">
						<a href="blog-single" class="block-20" style="background-image:url(person_1.jpg);">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#"></a></div>
								<div><a href="#"></a></div>
							</div>
							<h3 class="heading"><a href="#"></a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-danger">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				

				</div> 
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/pancakes.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2022</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">“To me, food is as much about the moment, the occasion, the location and the company as it is about the taste.</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-warning">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single" class="block-20" style="background-image: url('images/shawarma.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2022</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">"People who love to eat are always the best people." "To eat is a necessity, but to eat intelligently is an art."</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-danger">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-danger">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="reservation" class="btn btn-white btn-outline-white">Book A Table Now</a>
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
	<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>
	
	<script src="{{ asset('js/menu-gallery.js') }}"></script>