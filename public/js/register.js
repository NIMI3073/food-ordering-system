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
     
    })
    .catch((error) => {
        console.log(error.response);
        alert(error?.response?.data?.message);
    });
});


   
   



