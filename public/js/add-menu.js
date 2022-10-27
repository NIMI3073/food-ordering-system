const file = document.getElementById('customFile')
const menu = document.getElementById('menu')
const nameOfMeal = document.getElementById('meal')
const menuDescription = document.getElementById('description')
const mealPrice= document.getElementById('price')
const submitBtn  = document.getElementById('btn')
const form = document.getElementById('menuForm')

form.addEventListener("submit",($event)=>{
    $event.preventDefault();

    let menusV2 = new FormData();
    menusV2.append('file', file.files[0]),
    menusV2.append('type', menu.value),
    menusV2.append('name_of_menu',nameOfMeal.value),
    menusV2.append('description',menuDescription.value),
    menusV2.append('price',mealPrice.value),
  
    console.log(menusV2);
    const headers = {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      }
    axios.post("http://127.0.0.1:8000/api/add-menu", menusV2,headers)
    .then((response) => {
        console.log(response);
        alert(response.data.message)

     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});






