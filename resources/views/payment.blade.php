<x-header>

</x-header>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt mb-10" style="margin-top:170px;">
    <div class="container">
        <div class="row no-gutters">
            <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl} " id="Table">
                <thead class="thead-dark">
                    <tr class="text-center text-block text-dark">
                    <th >Sn</th>
                    <th>id</th>
                    <th>Transaction Id</th>
                    <th>Transaction Ref</th>
                    <th>Order id</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                   
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($payments as $payment)
                    <td>{{ $index++ }}</td>
                    <td>{{ $payment->user_id }}</td>
                    <td>{{ $payment->transaction_id }}</td>
                    <td>{{ $payment->tx_ref }}</td>
                    <td>{{ $payment->group_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->status}}</td>
                    <td ><button type="button" class="btn btn-warning"><a href= "{{ route('userPaymentInfo') }}?group_id={{ $payment->group_id }}" class="text-white">more info</a></button> </td>
                  
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
