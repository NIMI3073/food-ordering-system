<x-header>

</x-header>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Make Order Now!!</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Order <i
                            class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top: 10px;padding-bottom: 10px">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info">
                <form action="/order" class="appointment-form" method="POST" id="orderForm">
                    @csrf
                    <h3 class="mb-3 text-center">Make your Order</h3>
                    <div class="row justify-content-center">

                        <div class="form-group">
                            <input type="name" name="name"class="form-control text-center" id="name" placeholder="Name">
                        </div>
                        @error('name')
                        <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <input type="email" name="email" class="form-control text-center" id="email" placeholder="Email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="text" name="phone_number"class="form-control text-center " id="phone" placeholder="Phone Number">
                        </div>
                        @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <input type="text" name="address" class="form-control text-center " id="address" placeholder="Home Address / Location..">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea class="form-control text-center"  cols="30" rows="5" id="meal" name="type_of_meal" placeholder="Type of Meal You want to order!!"></textarea>
                            @error('type_of_meal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="number" name="no_of_package" class="form-control text-center " id="packages" placeholder="No of package(s)...">
                            @error('no_of_package')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-center">
                      
                        <button type="submit"  id="btn" class="btn btn-white py-3 px-4">Make Order</button>
                      
                    </div>
                </form>
                
            </div>

        </div>
    </div>

    {{-- @if (isset($message))
                <div style="color: green; margin-left:30px">
                    {{ $message }}
                </div>
            @endif --}}
</section >

 

<x-footer>

</x-footer>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/order.js') }}"></script>
