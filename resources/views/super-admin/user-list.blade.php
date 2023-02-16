<!DOCTYPE html>
<html lang="en">

<x-admin-header>
        
</x-admin-header>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:150px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h2 class="text-center">List of Users</h2>
            </div>
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-info">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}" id="Table">
                    <thead class="thead-dark">
                        <tr>
                        <th>sn</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        
                    </tr>
                    </thead>
                  
                        @foreach ($users as $user)
                 
                    <tbody>

                        <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                      
                    </tr> 
                    </tbody>
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


