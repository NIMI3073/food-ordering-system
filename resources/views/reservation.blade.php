<x-header>

</x-header>
<!-- END nav -->

{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Reservation</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Reservation<i
                            class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:170px">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
				<form action="reservation" class="appointment-form">
					<h3 class="mb-3">Book your Table</h3>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="form-group">
								<input type="name" name="name" class="form-control" placeholder="Name">
								@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email">
								@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="phone_number" class="form-control" placeholder="Phone">
								@error('phone_number')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-calendar"></span></div>
									<input type="text" name="check_in" class="form-control book_date" placeholder="Check-In">
									@error('check_in')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-clock-o"></span></div>
									<input type="text" name="time" class="form-control book_time" placeholder="Time">
									@error('time')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="fa fa-chevron-down"></span></div>
										<select name="guest" id="" class="form-control">
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
						<div class="col-md-4">
							<div class="form-group">
								<input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
	




{{-- <x-footer>

</x-footer> --}}

</body>

</html>
