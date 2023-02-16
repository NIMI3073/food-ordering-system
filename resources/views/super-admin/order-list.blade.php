<!DOCTYPE html>
<html lang="en">
    <x-admin-header>
        
    </x-admin-header>


<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:120px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h4 class="text-center">List of Orders</h4>
            </div>
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center ">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}" id="Table">
                    <thead class="thead-dark">
                        <tr>
                        <th>sn</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Meal type</th>
                        <th>Package(s)order</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($orders as $order )
                                
                            @endforeach
                        <td>{{ $index++ }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                         <td>{{ $order->type_of_meal }}</td>
                        <td>{{ $order->no_of_package}}</td>
                    </tr> 
                    </tbody>
                    
                   
                </table>
            </div>
        </div>
    </div>
               
</section>

 

{{-- <x-footer>

</x-footer> --}}
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/order-list.js') }}"></script>
