const names = document.getElementById('name')
const email = document.getElementById('email')
const phones = document.getElementById('phone')
const password = document.getElementById('password')
const newPassword = document.getElementById('new-password')                        
const submitButton = document.getElementById('button')
const myForm = document.getElementById('registrationForm')

myForm.addEventListener("submit",($event)=>{

    $event.preventDefault();

    const users = {
        name: names.value,
        email:email.value,
        phone: phones.value,
        password: password.value,
        password_confirmation: newPassword.value,
        
    };
  
    console.log(users);

    axios.post("http://127.0.0.1:8000/api/register", users)
    .then((response) => {
        console.log(response);
        alert(response.data.message)
        window.setTimeout(function(){ window.location = "http://127.0.0.1:8000"; },500);
     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});


// axios.get("http://127.0.0.1:8000/api/register").then((response) => {
//     let getUsersList = response.data.register;
//     console.log(getUsersList);
//     let tableBody = document.querySelector("tbody");

//     getOrderList.forEach((user,index) => {
//        tableBody.innerHTML += `            
//       <tr>
//       <td>${index+1}</td>
//       <td>${user.name}</td>
//       <td>${user.email}</td>
//       <td>${user.phone_number}</td> 
      
     
//   </tr>`

//     });
// })

   
   



