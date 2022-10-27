<!DOCTYPE html>
<html lang="en">


<head>
	<title>Foodie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('design-asset/css/animate.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="{{ asset('design-asset/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('design-asset/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('design-asset/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('design-asset/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('design-asset/css/jquery.timepicker.css') }}">

	
	<link rel="stylesheet" href="{{ asset('design-asset/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('design-asset/css/style.css') }}">
</head>
<!-- END nav -->

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart items</h5>
          </div>
          @foreach ($cartItems as $cartItems )
              
          @endforeach
          <div class="card-body">
            <!-- Single item -->
            
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{url($cartItems->menu->file)}}" alt="Image"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p>{{ $cartItems->menu->name_of_menu }}</p>
                <p>{{ $cartItems->menu->description }}</p>
                <p>No of package:{{ $cartItems->units }}</p>
                <button type="button" class="btn btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item" style="color: red"><a href="{{ route ('delete-item') }}"></a>
                  <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list" style="color: orange">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn mb-5"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus" style="background-color: red;color:white"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button class="btn  mb-5"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus" style="background-color: black;color:white"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>#{{ $cartItems->menu->price }}</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            {{-- <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{ url('/images/jollof.jpg') }}" alt="Image"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Nigerian Rice</strong></p>
                <p>type: Jollof rice</p>
                <p>meat: chicken</p>

                <button type="button" class="btn btn-sm me-1 mb-1" data-mdb-toggle="tooltip"
                  title="Remove item" style="color: red">
                  <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn  btn-sm mb-1" data-mdb-toggle="tooltip"
                  title="Move to the wish list" style="color: orange">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn mb-5"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()" style="">
                    <i class="fas fa-minus" style="color: white;background-color:red"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button class="btn btn mb-5"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus" style="color: white;background-color:black"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>#1800</strong>
                </p>
                <!-- Price -->
              </div>
            </div> --}}
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected delivery time</strong></p>
            <p class="mb-0">10mins after time of order </p>
          </div>
        </div>
        {{-- <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>Payment Method </strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https ://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
              alt="PayPal acceptance mark" /> 
          </div>
        </div>  --}}
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Menus
                <span>#3300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Delivery
                <span>#100</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>#0000</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-block btn-sm " style="background-color: blue;color:white">
              <a href="/menu"></a>
              Go back to Gallery
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

<x-footer>
  
</x-footer>

</body>
</html>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/cart.js') }}"></script>
