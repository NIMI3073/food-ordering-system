<x-header>

</x-header>


{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="cntainer">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Make Order Now!!</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Order <i
                            class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section> --}}



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt mb-10" style="margin-top:170px;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-10 p-4 p-md-5 d-flex align-items-center justify-content-center bg-danger">
                <form action="/payment" class="appointment-form" method="POST">
                    @csrf
                    <h3 class="mb-1 text-center">Make payment!!</h3>
                    <div class="row justify-content-center">

                        <div class="form-group">
                            <input type="name" name="name" size="30"  class="form-control text-center" id="name" placeholder="Name">
                        </div>
                        @error('name')
                        <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <input type="email" name="email" size="50"   class="form-control text-center" id="email" placeholder="Email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="text" name="card_number" size="20" autocomplete="off"  class="form-control text-center card-number" id="card_number" placeholder="Card Number">
                        </div>
                        @error('card_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <input type="text" name="cvc" size="2" autocomplete="off"  class="form-control text-center card-number" id="cvc" placeholder="CVC">
                        </div>
                        @error('cvc')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label class="text-center text-white">Expiration (MM/YYYY)</label>
                            <input type="text" name="exp_month" size="2" class="form-control text-center card-expiry-month"  placeholder="Expiry month">
                            <input type="text" name="exp_year" size="4" class="form-control text-center card-expiry-year" placeholder="Expiry year">
                         
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit"  id="btn" class="btn btn-white py-3 px-4">Submit</button>
                    </div>
                </div>             
                </form>
            </div>
        </div>
    </div>

    
</section >



 

{{-- <x-footer>

</x-footer> --}}
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/register.js') }}"></script>
