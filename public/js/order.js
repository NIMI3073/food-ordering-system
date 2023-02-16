const Name = document.getElementById('name')
const mail = document.getElementById('email')
const phone = document.getElementById('phone')
const address = document.getElementById('address')
const typeOfMeal = document.getElementById('meal')
const noOfPackage = document.getElementById('packages')
const submitBtn  = document.getElementById('btn')
const form = document.getElementById('orderForm')

form.addEventListener("submit",($event)=>{

    $event.preventDefault();

    const orders = {
        name: Name.value,
        email: mail.value,
        phone_number: phone.value,
        address: address.value,
        type_of_meal:typeOfMeal.value,
        no_of_package: noOfPackage.value,
    };
  
    console.log(orders);

    axios.post("http://127.0.0.1:8000/api/order", orders)
    .then((response) => {
        console.log(response);
        alert(response.data.message)
        window.setTimeout(function(){ window.location = "http://127.0.0.1:8000/admin/order-list"; },200);
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});





// const names = document.getElementById('name')
// const email = document.getElementById('email')
// const phones = document.getElementById('phone_number')
// const password = document.getElementById('password')
// const submitButton = document.getElementById('button')
// const myForm = document.getElementById('registrationForm')

// myForm.addEventListener("submit",($event)=>{

//     $event.preventDefault();

//     const users = {
//         name: names.value,
//         email:email.value,
//         phone_number: phones.value,
//         password: password.value,
        
//     };
  
//     console.log(users);

//     axios.post("http://127.0.0.1:8000/api/regsiter", users)
//     .then((response) => {
//         console.log(response);
//         alert(response.data.message)
     
//     })
//     .catch((error) => {
//         console.log(error.response);
//         alert(error?.response?.data?.message);
//     });
// })


    // axios.get("http://127.0.0.1:8000/api/order").then((response) => {
    //     let getOrderList = response.data;
    //     console.log(response);
    //     let tableBody = document.querySelector("tbody");
    //     tableBody.innerHTML=''
    
    //     getOrderList.data.forEach((order,index) => {
    //         tableBody.innerHTML += `            
    //       <tr>
    //       <td>${index+1}</td>
    //       <td>${order.name}</td>
    //       <td>${order.email}</td>
    //       <td>${order.phone_number}</td> 
    //       <td>${order.address}</td>
    //       <td>${order.no_of_packages}</td>
         
      
    //   </tr>`
    
    //     });
    // });
   



