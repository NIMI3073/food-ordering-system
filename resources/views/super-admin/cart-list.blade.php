<!DOCTYPE html>
<html lang="en">
    <x-admin-header>
        
    </x-admin-header>







<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:150px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h4 class="text-center">Items in Cart</h4>
            </div>
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-warning">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}" id="Table">
                    <thead class="thead-dark">
                        <tr>
                        <th>sn</th>
                        <th>Menu Id</th>
                        <th>User Id</th>
                        <th>group Id</th>
                        <th>Units</th>
                        <th>status</th>
                        
                    </tr>
                    </thead>
                    

                  
                        @foreach ($items as $item)
                 
                    <tbody>

                        <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->menu_id }}</td>
                        <td>{{ $item->group_id }}</td>
                        <td>{{ $item->units}}</td>
                        <td>{{ $item->status }}</td>
                      
                    </tr> 
                    </tbody>
                    @endforeach
                </table>
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
<script src="{{ asset('js/user.js') }}"></script>


