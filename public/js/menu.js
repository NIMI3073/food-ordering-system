axios.get("http://127.0.0.1:8000/api/menu").then((response) => {
    console.log(response.data)
        let getMenusList = response.data.menus;
        console.log(getMenusList);
        let tableBody = document.querySelector("tbody");

        getMenusList.forEach((menu,index) => {
           tableBody.innerHTML += `            
          <tr>
          <td>${index+1}</td>
          <td><img src="${menu.file}" /></td>
          <td>${menu.type}</td>
          <td>${menu.name_of_menu}</td> 
          <td>${menu.price}</td>
         
      </tr>`
    
        });
    });







