<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->

    <div class="pt-5 mt-5">
        <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Comments</h3>
        <ul class="comment-list">
          <li class="comment">
            @foreach ($comments as $comment )
                
     
            <div class="vcard bio">
              <img src="{{ asset("images/person_1.jpg") }}" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3 class="text-center">{{ $comment->name }} </h3>
              <div class="meta mb-2 text-center">{{ $comment->created_at }}</div>
              <p class="text-center">{{ $comment->message }}</p>
              {{-- <p>A restaurant is a fantasy—a kind of living fantasy in which diners are the most important members of the cast.”</p> --}}
              {{-- <p><a href="/blog-single" class="reply">Reply</a></p> --}}
            </div>
          </li>
          @endforeach
          {{-- <li class="comment">
            <div class="vcard bio">
              <img src="{{ asset("images/person_1.jpg") }}" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>A.Y</h3>
              <div class="meta mb-2">september 30, 2021 at 12:45pm</div>
              <p>To give real service you must add something which cannot be bought or measured with money, and that is sincerity and integrity</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>


          <li class="comment">
            <div class="vcard bio">
              <img src="{{ asset("images/person_1.jpg") }}" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>Jonny</h3>
              <div class="meta mb-2">May 12, 2022 at 3:01am</div>
              <p>“A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food.</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>
          </li> --}}
        </ul>
       
</div>