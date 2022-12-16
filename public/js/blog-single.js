const Name = document.getElementById('name')
const email = document.getElementById('email')
const message= document.getElementById('message')

const form = document.getElementById('commentForm')



form.addEventListener("submit",($event)=>{

  $event.preventDefault();

  const blogs = {
    name: Name.value,
  email: email.value,
  message: message.value,
 
  
  };

  console.log(blogs);

  axios.post("http://127.0.0.1:8000/api/blog-single", blogs)
  .then((response) => {
      console.log(response);
      // let commentCounterNode = document.querySelector('#comment_count');
      // let previousValue = parseInt(commentCounterNode.textContent)
      // console.log(previousValue)
      // commentCounterNode.textContent = previousValue+1
      alert(response.data.message);
      window.setTimeout(function(){ window.location.reload() },200);
      // window.location.reload();
  })
  .catch((error) => {
      console.log(error.response);
      alert(error?.response?.data?.message);
  });
});








