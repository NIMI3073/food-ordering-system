<x-header>

</x-header>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">List Of Orders!</h1>
                {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span> List of Order <i
                            class="fa fa-chevron-right"></i></span></p> --}}
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top: 10px;padding-bottom: 10px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h4 class="text-center">List of Orders</h4>
            </div>
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}" id="Table">
                    <thead class="thead-light">
                        <tr>
                        <th>sn</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Package(s)order</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 
                    </tbody>
                   
                </table>
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

<script src="{{ asset('js/order-list.js') }}"></script>
