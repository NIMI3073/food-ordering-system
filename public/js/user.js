 axios.get("http://127.0.0.1:8000/api/user-list").then((response) => {
  console.log(response.data);
        let getUsersList = response.data.users;
        console.log(getUsersList);
        let tableBody = document.querySelector("tbody");

        getUsersList.forEach((user,index) => {
           tableBody.innerHTML += `            
          <tr>
          <td>${index+1}</td>
          <td>${user.name}</td>
          <td>${user.email}</td>
          <td>${user.phone}</td> 
          
         
      </tr>`
    
        });
    });



