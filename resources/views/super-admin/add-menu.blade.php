<x-header>

</x-header>
<!-- END nav -->

{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Menu</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Menu <i
                            class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section" style=" margin-top:20px;padding-bottom:30px">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>



</section>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="padding-bottom: 40px;" id="menuForm">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-warning">
                <form action="/admin/add-menu" class="appointment-form text-center text-block" method="POST"
                    id="" enctype="multipart/form-data">
                    @csrf
                    <h3 class="mb-3 text-center">Add New Menu</h3>

                    <div class="row justify-content-center">
                        <div class="form-group" >
                            <input type="file" name="file" class="form-control text-center text-white" id="customFile" />
                            @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong> <select class="form-control text-white" name="type" id="menu">
                                <option value="" selected="" disabled="">--Select Menu--</option>
                                <option class="text-dark" value="african dish">African Dishes</option>
                                <option class="text-dark" value="foreign dish">Foregin Dishes</option>

                            </select></strong>
                       

                        </div>



                        <div class="form-group">
                            <input type="text" name="name_of_menu"class="form-control" id="meal"
                                placeholder="Name of Menu">

                            @error('name_of_menu')
                                <div class="alert alert-danger "> {{ $message }} </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="text" name="price" class="form-control" id="price"
                                placeholder="Price tag">

                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row justify-content-center">
                            <button type="submit" id="btn" class="btn btn-primary py-3 px-4">Submit</button>
                        </div>
                    </div>

                </form>

            </div>

            @if (isset($message))
                <div class="alert alert-success">{{ $message }}</div>
            @endif
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
{{-- <script src="{{ asset('js/add-menu.js') }}"></script> --}}
