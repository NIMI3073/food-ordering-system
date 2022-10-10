 axios.get("http://127.0.0.1:8000/api/order").then((response) => {
        let getOrderList = response.data.order;
        console.log(getOrderList);
        let tableBody = document.querySelector("tbody");

        getOrderList.forEach((order,index) => {
           tableBody.innerHTML += `            
          <tr>
          <td>${index+1}</td>
          <td>${order.name}</td>
          <td>${order.email}</td>
          <td>${order.phone_number}</td> 
          <td>${order.address}</td>
          <td>${order.no_of_package}</td>
         
      </tr>`
    
        });
    });



