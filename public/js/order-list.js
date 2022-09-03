axios.get("http://127.0.0.1:8000/api/order-list").then((response) => {
        let getOrderList = response.data;
        console.log(response.data);
        let tableBody = document.querySelector("tbody");

        getOrderList.data.forEach((order,index) => {
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

 


// const generateButton = document.getElementById("orderBtn");


//     const api = "http://127.0.0.1:8000/api/order";

// function makeRequest(verb, url, data) {
//   return new Promise((resolve, reject) => {
//     if (verb === "POST" && !data) {
//       reject({ error: "No data  provided for Post request" });
//     }

    
//     if (verb !== "POST" && verb !== "GET") {
//       reject({ error: "Invalid request verb" });
//     }

//     let request = new XMLHttpRequest();
//     request.open(verb, url);
//     request.onreadystatechange = () => {
//       if (request.readyState === 4) {
//         if (request.status === 200 || request.status === 201) {
//           resolve(JSON.parse(request.response));
//         } else {
//           console.log(request.response);
//           reject(request.response);
//         }
//       }
//     };
//     if (verb === "POST") {
//       request.setRequestHeader("Content-Type", "application/json");
//       request.send(JSON.stringify(data));
//     } else {
//       request.send();
//     }
//   });
// }

// async function createPost() {
//   const orderPromise = makeRequest("GET", api );

//   try {
//     const [orderResponse] =
//       await Promise.all([orderPromise]);
//       console.clear();
//       console.log(orderResponse)
//       let tableBody = document.querySelector('#table-content');
     
//       orderResponse.forEach((order,index) => {
//         tableBody.innerHTML+=`
//         <tr>
//         <td>${index+1}</td>
//         <td>${order.name}</td>
//         <td>${order.email}</td>
//         <td>${order.phone_number}</td> 
//         <td>${order.address}</td>
//         <td>${order.no_of_packages}</td>
        
//       </tr>
//         `;
//       })
      

//   } catch (error) {
//     console.log(error)
//   }
// }

// generateButton.addEventListener("click", () => {
//   createPost();
// });