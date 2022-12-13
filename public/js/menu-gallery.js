const addToCart = (menuId) => {
    console.log(menuId)
    let config = {
        headers: {
          Authorization: "Bearer "+ localStorage.getItem('token'),
        }
      }
    axios.post('http://localhost:8000/api/carts',{menu_id : menuId}, config).then((response)=>{
    console.log(response.data)

    // to display numbers of items added to cart without reloading page
    let cartCounterNode = document.querySelector('#cart_counter');
    let previousValue = parseInt(cartCounterNode.textContent)
    console.log(previousValue)
    cartCounterNode.textContent = previousValue+1
    alert("Item Added to Cart Successfully")
    }).catch((error)=>{
        console.log(error.response)
        alert("error Adding Item to Cart")
    })
}