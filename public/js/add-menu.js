const file = document.getElementById('customFile')
const menu = document.getElementById('menu')
const nameOfMeal = document.getElementById('meal')
const mealPrice= document.getElementById('price')
const submitBtn  = document.getElementById('btn')
const form = document.getElementById('menuForm')

form.addEventListener("submit",($event)=>{
    $event.preventDefault();

    const menus = {
        file: file.value,
        type: menu.value,
        name_of_menu:nameOfMeal.value,
        price : mealPrice.value,
    };
  
    console.log(menus);

    axios.post("http://127.0.0.1:8000/api/add-menu", menus)
    .then((response) => {
        console.log(response);
        alert(response.data.message)
     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});






