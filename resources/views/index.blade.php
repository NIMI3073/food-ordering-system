<!DOCTYPE html>
<html lang="en">
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
                    <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                    {{-- <li class="nav-item"><a href="menu" class="nav-link">Menu</a></li> --}}
                    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="reservation" class="nav-link">Reservation</a></li>
                    <li class="nav-item"><a href="cart/cart" class="nav-link">Cart</a></li>
                    @if (auth()->user() === 'super_admin')
                        <li class="nav-item"><a href="order-list" class="nav-link">Order-list</a></li>
                        <li class="nav-item"><a href="user-list" class="nav-link">Users</a></li>
                        <li class="nav-item"><a href="add-menu" class="nav-link">Add New Menu</a></li>
                    @endif
					<li class="nav-item"><a href="menu-gallery" class="nav-link">Menu Gallery</a></li>
                    <li class="nav-item"><a href="order" class="nav-link"> Make Order</a></li>

                   
                          <li class="nav-item"><a href="register" class="nav-link">Sign Up</a></li>
                            <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="logout" class="nav-link">LogOut</a></li>
                       

                          
                    


                </ul>
            </div>
        </div>
    </nav>

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

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>
					<h2 class="mb-4">Our Menu</h2>
					<h5>African Dishes</h5>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Breakfast</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/akara-pap.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Pap & Akara</h3>
									</div>
									<div class="one-forth">
										<span class="price">#700</span>
									</div>
								</div>
								<p><span>Pap</span>, <span>Akaraa</span>, <span>Moimoi</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/fried-yam.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Fried yam</h3>
									</div>
									<div class="one-forth">
										<span class="price">#700</span>
									</div>
								</div>
								<p><span>plantain</span>, <span>fish-stew</span>, <span>Potatoes</span>, <span>fish</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roasted Sauce</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1000</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Beef</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Lunch</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/eba.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Eba with efo-riro </h3>
									</div>
									<div class="one-forth">
										<span class="price">#1,200</span>
									</div>
								</div>
								<p><span>Eba</span>, <span>Efo-riro</span>, <span>okra-soup</span>, <span>Egusi</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/abula.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Fluffy Amala</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1,500</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Gbegiri</span>, <span>Ewedu</span>, <span>Fish</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/semo.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Soft semovita</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1,200</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Egusi</span>, <span>Efo-riro</span>, <span>fish</span></p>
							</div>
						</div>
						<span class="flat flaticon-pizza" style="left: 0;"></span>
						<span class="flat flaticon-chicken" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Dinner</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/porridge.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Porridge</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1,500</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Ifokore</span>, <span>fish</span>, <span>plantain</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/Ewa-Agoyin.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Ewa Agoyin</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1,200</span>
									</div>
								</div>
								<p><span>Bread</span>, <span>Plantain</span>, <span>Ponmo</span>, <span>fish</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/ofada.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Ofada Rice</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1,700</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Plaintain</span>,<span>Rice</span>,<span>fish</span></p>
							</div>
						</div>
						<span class="flat flaticon-omelette" style="left: 0;"></span>
						<span class="flat flaticon-burger" style="right: 0;"></span>
					</div>
				</div>
		
						
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Drinks</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Cofee</h3>
									</div>
									<div class="one-forth">
										<span class="price">#500</span>
									</div>
								</div>
								<p><span>Cofee</span>, <span>Milk</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Ice-cream</h3>
									</div>
									<div class="one-forth">
										<span class="price">#700</span>
									</div>
								</div>
								<p><span>Chocolate</span>, <span>Banana</span>, <span>strawberry</span>, <span>Vanilla</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Cup ice-cream</h3>
									</div>
									<div class="one-forth">
										<span class="price">#500</span>
									</div>
								</div>
								<p><span>chocolate</span>, <span>Vanilla</span>, <span>strawberry</span></p>
							</div>
						</div>
						<span class="flat flaticon-cupcake" style="left: 0;"></span>
						<span class="flat flaticon-ice-cream" style="right: 0;"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Wine Card</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Blue wine</h3>
									</div>
									<div class="one-forth">
										<span class="price">#2,000</span>
									</div>
								</div>
								<p><span>wine</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Red wine</h3>
									</div>
									<div class="one-forth">
										<span class="price">#2,000</span>
									</div>
								</div>
								<p><span>Wine</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>BELIS</h3>
									</div>
									<div class="one-forth">
										<span class="price">#3000</span>
									</div>
								</div>
								<p><span>Wine</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Drinks &amp; Tea</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Coffee Tea</h3>
									</div>
									<div class="one-forth">
										<span class="price">#700</span>
									</div>
								</div>
								<p><span>Coffee</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Coco tea</h3>
									</div>
									<div class="one-forth">
										<span class="price">#700</span>
									</div>
								</div>
								<p><span>coco chocolate</span>, <span>Milk</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Orange Jucie</h3>
									</div>
									<div class="one-forth">
										<span class="price">#1000</span>
									</div>
								</div>
								<p><span>Jucie</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>
			</div>
		</div>

	</section> 


	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image:url(images/bg_6.jpg);"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image:url(images/bg_4.jpg);"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">This is our secrets</span>
						<h2 class="mb-4">Perfect Ingredients</h2>
						<p>Perfect Ingredients that will give good taste to your savour,eat with us today, dream for more and crave for more.
							The taste is the difference🍲🍛
						</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
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
						<a href="blog-single" class="block-20" style="background-image:url('images/image_1.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="#" class="btn btn-white btn-outline-white">Book A Table Now</a>
				</div>
			</div>
		</div>
	</section>
<x-footer>


</x-footer>
		
	</body>
	</html>