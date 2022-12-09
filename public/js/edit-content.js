const content = document.getElementById('content');
const id = document.getElementById('editId');
const form = document.getElementById('editForm');


form.addEventListener("submit",($event)=>{

    $event.preventDefault();

    const contents = {
        id:id.value,
        content: content.value,
    
    };
  
    console.log(contents);

    axios.post("http://127.0.0.1:8000/api/edit-content", contents)
    .then((response) => {
        console.log(response);
        alert(response.data.message)
     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});

function contentUpdate(id,content){
   
    return axios.put("http://127.0.0.1:8000/api/edit-content", {
        id:id,
        content:content
    }).then((response)=>{
    let editUpdate = response.data;
    console.log(editUpdate);
    alert(response.data.message)
    document.querySelector("#content_"+ id).textContent = content
    
    

    });

    
}






