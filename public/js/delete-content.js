function deleteContent(id){
    axios.delete("http://127.0.0.1:8000/api/blog-list", id).then((response)=>{
        let deleteList = response.data;
        console.log(deleteList);
        
    })
    
}