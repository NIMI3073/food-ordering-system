
const file = document.getElementById('file')
const title = document.getElementById('title')
const content = document.getElementById('content')
const submitBtn  = document.getElementById('btn')
const form = document.getElementById('blogForm')

form.addEventListener("submit",($event)=>{
    $event.preventDefault();

    let blogV2 = new FormData();
  
    blogV2.append('cover_image', file.files[0]),
    blogV2.append('title', title.value),
    blogV2.append('content',content.value),
   
 
  
    console.log(blogV2);
    const headers = {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      }
    axios.post("http://127.0.0.1:8000/api/add-blog", blogV2,headers)
    .then((response) => {
        console.log(response);
        alert(response.data.message)

     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});






