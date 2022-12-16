<!DOCTYPE html>
<html lang="en">

<x-header>

</x-header>

<section class="hero-wrap hero-wrap-2" style="background-image: url(images/section_bg03.png);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-5">
        <h1 class="mb-2 bread">Blog Single</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row no-gutters slider-text align-items-end justify-content-center">
    <div class="col-lg-6 ftco-animate">
      <h2 class="text-center">Recipes,
  Local news,
  Chefs,
  Food-love/inspiration &
  Sales and promotions</h2>

      <p>
        <img src="{{ url($blog->cover_image) }}" alt="" class="img-fluid" style="height: 300px;">
      </p>
      <p>{{ $blog->title }}</p>
      <p>{!! $blog->content !!}</p>
      {{-- <p class="align-items-end justify-content-center">"A recipe has no soul. You, as the cook, must bring soul to the recipe." 
        <em>"A recipe is a story that ends with good meal."I think baking is very rewarding, and if you follow a good recipe, you will get success.</em></p>
      <p>“Food is one part of the experience. And it has to be somewhere between 50 to 60 percent of the dining experience. But the rest counts as well: The mood, the atmosphere, the music, the feeling, the design, the harmony between what you have on the plate and what surrounds the plate.” “One of the reasons that people enjoy coming to a great restaurant is that when an extraordinary meal is placed in front of them, they feel honored, respected, and even a little bit loved." You can only find that at foodie!!!</p>
      <p>“Although the skills aren’t hard to learn, finding the happiness and finding the satisfaction and finding fulfillment in continuously serving somebody else something good to eat, is what makes a really good restaurant.”</p>
      <p>"The only time to eat diet food is while you're waiting for the steak to cook."One cannot think well, love well, sleep well, if not has not dined well.</p>
      <p>"Cooking is all about people. Food is maybe the only universal thing that really has the power to bring everyone together. No matter what culture, everywhere around the world, people eat together."</p>
      <p>“Customers don’t always know what they want. The decline in coffee-drinking was due to the fact that most of the coffee people bought was stale and they weren’t enjoying it. Once they tasted ours and experienced what we call “the third place”.. a gathering place between home and work where they were treated with respect.. they found we were filling a need they didn’t know they had.” </p>
      <p>"People who love to eat are always the best people.""To eat is a necessity, but to eat intelligently is an art.""We all eat, an it would be a sad waste of opportunity to eat badly." “Every restaurant is a theater, and the truly great ones allow us to indulge in the fantasy that we are rich and powerful. When restaurants hold up their end of the bargain, they give us the illusion of being surrounded by servants intent on ensuring our happiness and offering extraordinary food. But even modest restaurants offer the opportunity to become someone else, at least for a little while. Restaurants free us from mundane reality; that is part of their charm. When you walk through the door, you are entering neutral territory where you are free to be whoever you choose for the duration of the meal.” </p> --}}
    
      
     

      <div class="pt-3 mt-3">
        
  
        <x-blog-comment>
          
        </x-blog-comment>
  
        <!-- END comment-list -->
        
        <div class="comment-form-wrap pt-5">
          <h3 class="mb-5 h4 font-weight-bold p-4 bg-light justify-content-center">Leave a comment</h3>
          <form action="blog-single" method="POST" class="p-4 p-md-5 bg-light" id="commentForm">
            @csrf
            <div class="form-group">
              <label for="name">Name *</label>
              <input type="text" class="form-control" name="name" id="name">
              @error('name')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" class="form-control" name="email" id="email">
              @error('email')
                  <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="20" rows="10" class="form-control"></textarea>
              @error('message')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn py-3 px-4 btn-primary">Post Comment</button>
           
            </div>

          </form>
        </div>
      </div>
    </div> <!-- .col-md-8 -->

   
</div><!-- END COL -->
</div>
</div>
</section>


<footer class="ftco-footer ftco-no-pb ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 col-lg-3" style="margin-left:80px">
        <div class="ftco-footer-widget mb-4 text-center">
          <h5 class="ftco-heading-2 text-white">Food.ie</h5>
          <p>“Food can be very transformational, and it can be more than just about a dish. That’s what happened to me when I first went to Foodie. I fell in love. And if you fall in love, well, then everything is easy.”</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-whatsapp"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 text-center" style="margin-left:80px">
        <div class="ftco-footer-widget mb-4">
          <h5 class="ftco-heading-2 text-white">Open Hours</h5>
          <ul class="list-unstyled open-hours">
            <li class="d-flex"><span>Monday</span>:<span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Tuesday</span>:<span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Wednesday</span>:<span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Thursday</span>:<span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Friday</span>:<span>9:00 - 02:00</span></li>
            <li class="d-flex"><span>Saturday</span>:<span>9:00 - 02:00</span></li>
            <li class="d-flex"><span>Sunday</span>:<span> Closed</span></li>
          </ul>
        </div>
      </div>
      
    <div class="col-md-6 col-lg-3 text-center" style="margin-left:80px">
      <div class="ftco-footer-widget mb-4">
       <h5 class="ftco-heading-2 text-white">Send a mail</h5>
       <h6>foodie...@gmail.com</h6>
       
        <div class="ftco-heading-2">
          <h5 class="text-white">Contacts</h5>
          <span class="text-white">+234 4216 4579, +234 4216 4579</span>
          
        </div>
      
       
    </div>
  </div>
</div>
</div>

</footer>

  
<script src="{{ asset('design-asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery-migrate-3.0.1.min.j') }}s"></script>
<script src="{{ asset('design-asset/js/popper.min.js') }}"></script>
<script src="{{ asset('design-asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('design-asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('design-asset/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('design-asset/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('design-asset/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('design-asset/js/google-map.js') }}"></script>
<script src="{{ asset('design-asset/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/blog-single.js') }}"></script>

</body>
</html>