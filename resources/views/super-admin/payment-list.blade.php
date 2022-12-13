<!DOCTYPE html>
<html lang="en">

<x-admin-header>
        
</x-admin-header>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:150px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h2 class="text-center text-dark">Payment List</h2>
            </div>
            <div class="col-lg-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-secondary" style="border-radius: 10px">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}">
                    <tr class="text-center text-block">
                        <thead class="bg-dark text-center">
                        <th class="text-white">Sn</th>
                        <th class="text-white">id</th>
                        {{-- <th>Menu</th> --}}
                        <th class="text-white">Transaction Id</th>
                        <th class="text-white">Transaction Ref</th>
                        <th class="text-white">Group id</th>
                        <th class="text-white">Amount</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Action</th>
                        
                    </tr>
                    </thead>
                    <tbody class="bg-dark">
                        <tr>
                        @foreach ($payments as $payment)
                        <td class="text-primary text-center">{{ $index++ }}</td>
                        {{-- <th><img src="{{ url($payment->menu->file) }}" alt="Image" class="w-100" /></th> --}}
                        <td class="text-danger text-center">{{ $payment->user_id }}</td>
                        <td class="text-primary text-center">{{ $payment->transaction_id }}</td>
                        <td class="text-danger text-center ">{{ $payment->tx_ref }}</td>
                        <td class="text-primary text-center">{{ $payment->group_id }}</td>
                        <td class="text-danger text-center ">{{ $payment->amount }}</td>
                        <td class="text-success text-center">{{ $payment->status }}</td>
                        <td ><button type="button" class="btn btn-lg btn-primary"><a href= "{{ route('payment-info') }}?group_id={{ $payment->group_id }}" class="text-white">more info</a></button> </td>
                        <tr>
                       
                      
                    </tr> 
                    
                    @endforeach
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
<script src="{{ asset('js/user.js') }}"></script>


