 <x-header>

 </x-header>


 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
     <div class="overlay"></div>
     <div class="container">
         <div class="row no-gutters slider-text align-items-end justify-content-center">
             <div class="col-md-6 ftco-animate text-center mb-5">
                 <h1 class="mb-2 bread">Sign Up Now!!</h1>
                 <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                 class="fa fa-chevron-right"></i></a></span> <span>SignUp<i
                             class="fa fa-chevron-right"></i></span></p>
             </div>
         </div>
     </div>
 </section>



 <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top: 10px;padding-bottom: 10px;"
     id="myForm">
     <div class="container">
         <div class="row no-gutters">
             <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-warning">
                 <form action="/register" class="appointment-form" method="POST" id="registrationForm">
                     @csrf
                     <h3 class="mb-3 text-center">Sign Up Now!</h3>
                     <div class="row justify-content-center">

                         <div class="form-group">
                             <input type="name" name="name"class="form-control text-center" id="name"
                                 placeholder="Name">
                         </div>
                         @error('name')
                             <div class="alert alert-danger ">{{ $message }}</div>
                         @enderror

                         <div class="form-group">
                             <input type="email" name="email" class="form-control text-center" id="email"
                                 placeholder="Email">
                         </div>
                         @error('email')
                             <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                         <div class="form-group">
                             <input type="text" name="phone" class="form-control text-center " id="phone"
                                 placeholder="Phone Number">
                         </div>
                         @error('phone')
                             <div class="alert alert-danger">{{ $message }}</div>
                         @enderror



                         <div class="form-group">
                             <input type="password" name="password" class="form-control text-center " id="password"
                                 placeholder="password">
                             @error('password')
                                 <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                         </div>



                         <div class="form-group">
                             <input type="password" name="password_confirmation" class="form-control text-center "
                                 id="new-password" placeholder="confirm password">

                         </div>
                     </div>




                     <div class="row justify-content-center">

                         <button type="submit" id="btn" class="btn btn-primary py-3 px-4">Submit</button>

                     </div>
             </div>
             {{--    
                                 @if (isset($message))

                                 <div class="alert alert-success">{{ $message }}</div>
                                     
                                 @endif --}}
             </form>

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

 <script src="{{ asset('js/register.js') }}"></script>
