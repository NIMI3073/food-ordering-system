axios.get("http://127.0.0.1:8000/api/menu").then((response) => {
    // console.log(response)
        let getMenusList = response.data.menus;
        console.log(getMenusList);
        let tableBody = document.querySelector("tbody");

        getMenuList.forEach((menus,index) => {
           tableBody.innerHTML += `            
          <tr>
          <td>${index+1}</td>
          <td>${menus.type}</td>
          <td>${menus.file}</td>
          <td>${menus.name_of_menu}</td> 
          <td>${menus.price}</td>
         
      </tr>`
    
        });
    });







