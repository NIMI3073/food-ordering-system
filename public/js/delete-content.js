function deleteContent(id){

    axios.delete(`/${id}`).then((response)=>{
        let deleteList = response.data;
        console.log(deleteList);
        
    })
}