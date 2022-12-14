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
  Food envy/love/inspiration &
  Sales and promotions</h2>

      <p>
        <img src="{{ asset("images/delis.jpg") }}" alt="" class="img-fluid" style="height: 300px">
      </p>
      <p class="align-items-end justify-content-center">"A recipe has no soul. You, as the cook, must bring soul to the recipe." 
        <em>"A recipe is a story that ends with good meal."I think baking is very rewarding, and if you follow a good recipe, you will get success.</em></p>
      <p>“Food is one part of the experience. And it has to be somewhere between 50 to 60 percent of the dining experience. But the rest counts as well: The mood, the atmosphere, the music, the feeling, the design, the harmony between what you have on the plate and what surrounds the plate.” “One of the reasons that people enjoy coming to a great restaurant is that when an extraordinary meal is placed in front of them, they feel honored, respected, and even a little bit loved." You can only find that at foodie!!!</p>
      <p>“Although the skills aren’t hard to learn, finding the happiness and finding the satisfaction and finding fulfillment in continuously serving somebody else something good to eat, is what makes a really good restaurant.”</p>
      <p>"The only time to eat diet food is while you're waiting for the steak to cook."One cannot think well, love well, sleep well, if not has not dined well.</p>
      <p>"Cooking is all about people. Food is maybe the only universal thing that really has the power to bring everyone together. No matter what culture, everywhere around the world, people eat together."</p>
      <p>“Customers don’t always know what they want. The decline in coffee-drinking was due to the fact that most of the coffee people bought was stale and they weren’t enjoying it. Once they tasted ours and experienced what we call “the third place”.. a gathering place between home and work where they were treated with respect.. they found we were filling a need they didn’t know they had.” </p>
      <p>"People who love to eat are always the best people.""To eat is a necessity, but to eat intelligently is an art.""We all eat, an it would be a sad waste of opportunity to eat badly." “Every restaurant is a theater, and the truly great ones allow us to indulge in the fantasy that we are rich and powerful. When restaurants hold up their end of the bargain, they give us the illusion of being surrounded by servants intent on ensuring our happiness and offering extraordinary food. But even modest restaurants offer the opportunity to become someone else, at least for a little while. Restaurants free us from mundane reality; that is part of their charm. When you walk through the door, you are entering neutral territory where you are free to be whoever you choose for the duration of the meal.” </p>
      <div class="tag-widget post-tag-container mb-5 mt-5">
        {{-- <div class="tagcloud">
          <a href="#" class="tag-cloud-link">Food</a>
          <a href="#" class="tag-cloud-link">Wine</a>
          <a href="#" class="tag-cloud-link">Drink</a>
          <a href="#" class="tag-cloud-link">Dish</a>
        </div> --}}
      </div>
      
      {{-- <div class="about-author d-flex p-4 bg-light">
        <div class="bio mr-5">
          <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
        </div>
        <div class="desc">
          <h3>George Washington</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
      </div> --}}


      <div class="pt-5 mt-5">
        <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">03 Feedbacks</h3>
        <ul class="comment-list">
          <li class="comment">
            
            <div class="vcard bio">
              <img src="{{ asset("images/person_1.jpg") }}" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>B Bam </h3>
              <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
              <p>A restaurant is a fantasy—a kind of living fantasy in which diners are the most important members of the cast.”</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>
          </li>

          {{-- <li class="comment">
            <div class="vcard bio">
              <img src="{{ asset("images/person_1.jpg") }}" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>A.Y</h3>
              <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
              <p>To give real service you must add something which cannot be bought or measured with money, and that is sincerity and integrity</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>


          <li class="comment">
            <div class="vcard bio">
              <img src="{{ asset("images/person_1.jpg") }}" alt="Image placeholder">
            </div>
            <div class="comment-body">
              <h3>Jonny</h3>
              <div class="meta mb-2">August 3, 2020 at 2:21pm</div>
              <p>“A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food.</p>
              <p><a href="#" class="reply">Reply</a></p>
            </div>
          </li>
        </ul> --}}
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
            {{-- <div class="form-group">
              <label for="website">Website</label>
              <input type="url" class="form-control" name="url" id="website">
            </div> --}}

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
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

    {{-- <div class="col-lg-4 sidebar ftco-animate"> --}}
      {{-- <div class="sidebar-box">
        <form action="#" class="search-form">
          <div class="form-group">
            <span class="icon icon-search"></span>
            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
          </div>
        </form>
      </div> --}}
      {{-- <div class="sidebar-box ftco-animate">
       <h3>Category</h3>
       <ul class="categories">
        <li><a href="#">Breakfast <span>(6)</span></a></li>
        <li><a href="#">Lunch <span>(8)</span></a></li>
        <li><a href="#">Dinner <span>(2)</span></a></li>
        <li><a href="#">Desserts <span>(2)</span></a></li>
        <li><a href="#">Drinks <span>(2)</span></a></li>
        <li><a href="#">Wine <span>(2)</span></a></li>
      </ul>
    </div>

    <div class="sidebar-box ftco-animate">
      <h3>Popular Articles</h3>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- <div class="sidebar-box ftco-animate">
      <h3>Tag Cloud</h3>
      <ul class="tagcloud m-0 p-0">
        <a href="#" class="tag-cloud-link">Dish</a>
        <a href="#" class="tag-cloud-link">Food</a>
        <a href="#" class="tag-cloud-link">Lunch</a>
        <a href="#" class="tag-cloud-link">Menu</a>
        <a href="#" class="tag-cloud-link">Dessert</a>
        <a href="#" class="tag-cloud-link">Drinks</a>
        <a href="#" class="tag-cloud-link">Sweets</a>
      </ul>
    </div> --}}

    {{-- <div class="sidebar-box ftco-animate">
     <h3>Archives</h3>
     <ul class="categories">
       <li><a href="#">January 2020 <span>(20)</span></a></li>
       <li><a href="#">February 2020 <span>(30)</span></a></li>
       <li><a href="#">March 2020 <span>(20)</span></a></li>
       <li><a href="#">April 2020 <span>(6)</span></a></li>
       <li><a href="#">May 2020 <span>(8)</span></a></li>
     </ul>
   </div> --}}


   {{-- <div class="sidebar-box ftco-animate">
    <h3>Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
  </div> --}}
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