// axios.get("http://127.0.0.1:8000/api/order").then((info)=>{
//     let response = info.data
//     console.log(response.data)
//     let tableBody = document.querySelector("tbody");
//     response.data.forEach((list,index,arr)=>{
//         tableBody.innerHTML+= `            
//         <tr>
//         <tr>
//         <td>${index+1}</td>
//         <td>${order.name}</td>
//         <td>${order.email}</td>
//         <td>${order.phone_number}</td> 
//         <td>${order.address}</td>
//         <td>${order.no_of_packages}</td>
       
       

//     </tr>`
//     })
// });
"https://api.coinbase.com/v2/currencies"


axios.get("https://127.0.0.1:8000/api/order").then((response) => {
        let getOrderList = response.data;
        console.log(response.data);
        let tableBody = document.querySelector("tbody");

        getOrderList.data.forEach((order,index,arr) => {
            tableBody.innerHTML += `            
          <tr>
          <td>${index+1}</td>
          <td>${order.name}</td>
          <td>${order.email}</td>
          <td>${order.phone_number}</td> 
          <td>${order.address}</td>
          <td>${order.no_of_packages}</td>
         
      
      </tr>`
    
        });
    });

    // axios.get(`/todo?status=${status + dateParam}`).then((response) => {
    //     let getTodoData = response.data;
    //     console.log(response);
    //     let tableBody = document.querySelector("tbody");
    //     tableBody.innerHTML=''
    
    //     getTodoData.data.forEach((todo,index) => {
    //         tableBody.innerHTML += `            
    //       <tr>
    //       <td>${index+1}</td>
    //       <td>${todo.date}</td>
    //       <td>${todo.start_time}</td>
    //       <td>${todo.end_time}</td>
    //       <td>${todo.title}</td>
    //       <td>${todo.description}</td>
    //       <td id="status_${todo.id}">${todo.status}</td>
    //       <td>
    //       <span onclick="updateStatus(${todo.id}, 'completed')" class="glyphicon glyphicon-ok"></span>
    //       <span onclick="inProgressStatus(${todo.id}, 'in_progress')" class="glyphicon glyphicon-circle-arrow-right"></span>
    //       <span onclick="deleteTodo(${todo.id})" class="glyphicon glyphicon-trash"></span>
    
    //       </td>
    //   </tr>`
    
    //     });
    // });
   



