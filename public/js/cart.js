const image = document.getElementById('img')
const Name = document.getElementById('nameOfFood')
const price = document.getElementById('price')
const description = document.getElementById('description')
const submitBtn  = document.getElementById('btn')


    const carts = {
        image: image.value,
        name: Name.value,
        price: price.value,
        description: description.value,
    };
  
   

    console.log(carts);

    axios.post("http://127.0.0.1:8000/api/menu", carts)
    .then((response) => {
        console.log(response);
        alert(response.data.message)
     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });





