const Name = document.getElementById('name')
const email = document.getElementById('email')
// const url = document.getElementById('website')
const message= document.getElementById('message')

const form = document.getElementById('commentForm')



form.addEventListener("submit",($event)=>{

  $event.preventDefault();

  const blogs = {
    name: Name.value,
  email: email.value,
  // url: url.value,
  message: message.value,
 
  
  };

  console.log(blogs);

  axios.post("http://127.0.0.1:8000/api/blog-single", blogs)
  .then((response) => {
      console.log(response);
      alert(response.data.message);
  })
  .catch((error) => {
      console.log(error.response);
      alert(error?.response?.data?.message);
  });
});








