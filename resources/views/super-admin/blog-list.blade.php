<!DOCTYPE html>
<html lang="en">
    <x-admin-header>
        
    </x-admin-header>



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" style="margin-top:120px">
    <div class="container">
        <div class="row no-gutters">
            <div class="text-dark">
                <h4 class="text-center"><strong>The blogs</strong> </h4>
            </div>

            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center ">
                <table class="table table-striped table table-bordered table table-responsive{-sm|-md|-lg|-xl}" id="Table">
                    <thead class="thead-dark">
                        <tr>
                        <th>sn</th>
                        <th>Date</th>
                        <th>Cover image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($blogLists as $blog )
                                
                        <td>{{ $index++ }}</td>
                        <td>{{ $blog->created_at }}</td>
                        <td><img src="{{ url($blog->cover_image) }}" style="border-radius:20%;width:120px" /></td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>   
              
                     
                        <td><a  href= "{{ route('edit-content') }}?id={{ $blog->id }}">
                            <i class="fa-solid fa-square-pen text-warning"></i>
                            </a>
                            <a href="{{ route('delete-content') }}?id={{ $blog->id }}">
                            <i class="fa-sharp fa-solid fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr> 
                    @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
               
</section>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>

<script src="{{ asset('js/blog-list.js') }}"></script>
