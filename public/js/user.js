 axios.get("http://127.0.0.1:8000/api/order-user").then((response) => {
        let getUsersList = response.data.user;
        console.log(getUsersList);
        let tableBody = document.querySelector("tbody");

        getUsersList.forEach((user,index) => {
           tableBody.innerHTML += `            
          <tr>
          <td>${index+1}</td>
          <td>${user.name}</td>
          <td>${user.email}</td>
          <td>${user.phone_number}</td> 
          
         
      </tr>`
    
        });
    });



