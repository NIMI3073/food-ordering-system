<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->

    <div class="pt-5 mt-5">
        <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Comments</h3>
        <ul class="comment-list">
          <li class="comment">
            @foreach ($comments as $comment )
                
    
            <div class="comment-body">
              <h3 class="text-center">{{ $comment->name }} </h3>
              <div class="meta mb-2 text-center">{{ $comment->created_at }}</div>
              <p class="text-center">{{ $comment->message }}</p>
            </div>
          </li>
          @endforeach
    
        </ul>
       
</div>