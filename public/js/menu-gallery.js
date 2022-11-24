const addToCart = (menuId) => {
  console.log(menuId)
  let config = {
      headers: {
        Authorization: "Bearer "+ localStorage.getItem('token'),
      }
    }
  axios.post('http://localhost:8000/api/carts',{menu_id : menuId}, config).then((response)=>{
  console.log(response.data)
  alert("Item Added to Cart Successfully")
  }).catch((error)=>{
      console.log(error.response)
      alert("error Adding Item to Cart")
  })
}