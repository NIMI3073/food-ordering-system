<x-header>

</x-header>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt mb-10" style="margin-top:170px;">
    <div class="container">
        <div class="row no-gutters">
            <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl} " id="Table">
                <thead class="thead-dark">
                    <tr class="text-center text-block text-dark">
                    <th >Sn</th>
                    <th>Order id</th>
                    <th>Menu</th>
                    <th>Amount</th>
                    <th>Status</th>
                    {{-- <th>Action</th> --}}
                   
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($menu as $menus)
                    <td>{{ $index++ }}</td>
                    <td>{{ $menus->group_id }}</td>
                    <td><img src="{{ url($menus->menu->file) }}" alt="Image" style="border-radius:50%;width:140px" /></td>
                    <td>{{ $menus->menu->price }}</td>
                    <td>{{ $status}}</td>
                    {{-- <td><button type="button" class="btn btn-success"><a href="/payment" class="text-white">Back</a></button></td> --}}
                  
                    <tr>
                   
                  
                </tr> 
                @endforeach

                </tbody>
               
            </table>
          
           
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
