 <!-- Be present above all else. - Naval Ravikant -->
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

    
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Recent Blog</h2>
				</div>
			</div>
            @foreach ($blogs as $blog  )
			<div class=" row col-sm-3">
                <div class="col-md-4 ftco-animate" >
                    <div class="blog-entry">
                        <div class="block-20" style="background-image:url({{ $blog->cover_image }});">
                        </div>
                        <div class="text px-4 pt-3 pb-4">
                            <div class="meta">
                                <div><a href="#">{{ $blog->date }}</a></div>
                                <div><a href="#">{{ $blog->title }}</a></div>
                            </div>
                            <h3 class="heading"><a href="#"></a>{{ $blog->content }}</h3>
                            <p class="clearfix">
                                <a href="#" class="float-left read btn btn-danger">Read more</a>
                                {{-- <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a> --}}
                            </p>
                        </div>
                    </div>
                @endforeach
            
                </div>
			
			
	
				{{-- <div class="col-md-4 ftco-animate">
				
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
				

				</div>  --}}
				{{-- <div class="col-md-4 ftco-animate">
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
				</div> --}}
			</div>
		</div>
	</section>

