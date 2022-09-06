<x-header>

</x-header>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');">
    <div class="overlay"></div>
    <div class="container">
        {{-- <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Make Order Now!!</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Order <i
                            class="fa fa-chevron-right"></i></span></p>
            </div>
        </div> --}}
    </div>
</section>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top: 10px;padding-bottom: 10px" id="myForm">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info">
                <form action="/register" class="appointment-form" method="POST" id="registrationForm">
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
                            <input type="text" name="phone_number" class="form-control text-center " id="phone_number" placeholder="Phone Number">
                        </div>
                        @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        

                        <div class="form-group">
                            <input type="password" name="password" class="form-control text-center " id="password" placeholder="password">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control text-center " id="password" placeholder="password-confirmation">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    <div class="row justify-content-center">
                        <button type="submit"  id="button"  class="btn btn-white py-3 px-4">Submit to Make Order</button>
           
                    </div>
                              {{-- <script>
                                     function toggleRemove() {
                                         var hide = document.getElementById("myForm");
                                         hide.style.display = "none"

                                     }
                                 </script> --}}
                </form>
                
            </div>

        </div>
    </div>

    
</section >



 

<x-footer>

</x-footer>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/order.js') }}"></script>
