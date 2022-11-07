<x-header>
    
</x-header>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-5">
            {{-- <h1 class="mb-2 bread">Menu</h1> --}}
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                            class="fa fa-chevron-right"></i></a></span> <span>Menu <i
                        class="fa fa-chevron-right"></i></span></p>
        </div>
    </div>
</div>
</section>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top: 10px;padding-bottom: 10px">
<div class="container">
    <div class="row no-gutters">
        <div class="text-dark text-center">
            <h1 class="text-center text-dark" style="margin-left: 370px"></strong>Menus Lists!!</strong></h1>
        </div>
        <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info" id="div">
            <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl} " id="Table">
                <thead class="thead-dark">
                    <tr class="text-center text-block text-dark">
                    <th>sn</th>
                    <th>Image</th>
                    <th>Type of Menu</th>
                    <th>Name of Menu</th>
                    <th >Price</th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="bg"></td>
                    <td class="bg-warn"></td>
                    <td class="bg-prim"></td>
                    <td class="bg-succ"></td>
                    <td class="bg-dang"></td>
                  
                </tr> 
                </tbody>
               
            </table>
        </div>
    </div>
</div>
           




<x-footer>

</x-footer>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/menu.js') }}"></script>