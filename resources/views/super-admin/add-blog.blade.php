<!DOCTYPE html>
<html lang="en">
    <script src="https://cdn.tiny.cloud/1/9utw4xpphu23o2dn3acs504qwmrdk7dvcorhd4suynn0h1if/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <x-admin-header>
        
    </x-admin-header>


    <section class="h-100" >
        <div class="container">
            <div class="row blog-entry " style="margin-top:150px">
                <form action="add-blog" method="POST" enctype="multipart/form-data" id="blogForm" class="">
                    @csrf
                    <h2 class="text-dark text-center">Blog table</h2>
                   
                    <div class="form-group">
                        <input  type="file" name="cover_image" class="form-control text-center" placeholder="Cover-image" id="file">
                        @error('cover_image')
                        <span class="alert alert-danger">{{ $message }}</span>
                            
                        @enderror
                    </div>
         
                    <div class="form-group">
                        <input type="text" name="title" class="form-control text-center" placeholder="Enter title" id="title"> 
                        @error('title')
                        <span class="alert alert-danger">{{ $message }}</span>

                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <textarea cols="30" rows="3"  name="content" class="form-control text-dark" placeholder="Write content" id="content"></textarea>
                        @error('content')
                        <span class="alert alert-danger">{{ $message }}</span>
                            
                        @enderror
                    </div>
                    
                   
               
                        <button type="submit" class="btn btn-lg btn-success py-3 px-4 btn-center  " id="btn">Post Content</button>
                </form>
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
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>