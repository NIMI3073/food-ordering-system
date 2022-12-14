<x-header>

</x-header>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/section_bg03.png');" data-stellar-background-ratio="0.5" id="app">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-5">
        <h1 class="mb-2 bread">Contact us</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section bg-light" style="padding-left:150px ">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-12">
        <h2 class="h4 font-weight-bold">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Address:</span> Rd 8 Ogunsulure Street,G.R.A Ondo,Ondo state</p>
       </div>
     </div>
     <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
         <p><span>Phone:</span> <a href="tel://1234567920">+ 234 2355 9800</a></p>
         <p><span>Phone:</span> <a href="tel://1234567920">+ 234 9800 2355 </a></p>
       </div>
     </div>
     <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Email:</span> <a href="mailto:info@yoursite.com">foodie@yahoo.com</a></p>
         <p><span>Email:</span> <a href="mailto:info@yoursite.com">foodie@google.com</a></p>
       </div>
     </div>
    
   </div>
 </div>
</section>
<section class="ftco-section ftco-no-pt contact-section " >
 <div class="container">
  <div class="row d-flex no-gutters align-items-end justify-content-center">
   <div class="col-md-6 p-5 order-md-last">
    <h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>

    <form @submit.prevent="contactHandler" method="POST" id="form-group" name="contactForm">
      @csrf
      <div class="form-group">
        <input type="text" class="form-control" name="name" v-model="contactData.name" placeholder="Your Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="email" v-model="contactData.email" placeholder="Your Email">
      </div>
      
      <div class="form-group">
        <textarea name="message" id="" cols="30" rows="4" v-model="contactData.message" class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
      </div>
    </form>
  </div>
 
</div>
</div>
</section>

<x-footer>
  
</x-footer>

</body>
</html>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const {
        createApp
    } = Vue

    createApp({
            data() {
                return {
                    ContactData: {
                        name: null,
                        email: null,
                        message: null,
                      
                    },
                    errorMessage: null
                }
            },
            methods: {
                contactHandler() {
                    return axios.post('http://localhost:8000/api/contact', this.contactData).then(response => {
                        console.log(response);
                        alert(response.data.message)
                    }).catch(error => {
                        this.errorMessage = error.response.data.message
                        console.log(error.response)
                    })
                }
            },
        })
        .mount("#app")
</script>