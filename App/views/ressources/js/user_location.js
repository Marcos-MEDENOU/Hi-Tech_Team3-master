
// retrive a div which contain the "fil d'ariane for user location"
let shop_list = document.querySelector(".shop_list");
let user_location = document.querySelector("div#user_location");


// an array to check which link is actived
let allLinks = [];





/************* get the parent of element where the JS event is occured **************/
shop_list.addEventListener("click", function (e) {
    e.preventDefault();

    console.log(e);
    //push on the array all elmts which are clicked
    // let list_of_target = [];
    // console.log(allLinks);
    // let e_target = allLinks[0];
    console.dir(e.target);
    console.dir(e.target.parentElement.className);

    
    switch (e.target.tagName) {
        case "LI" :
            
            break;
    
        case "A":
            
            break;
    
        default:
            break;
    }
    
    if (e.target.tagName === "LI") {
        allLinks.push(e.target.childNodes[0]);
        console.log(allLinks);  
    }
    


    /** 
     * buttonAdd.forEach(function (element, index))
     * @return void 
     */  
    // obj_tab.push({name:"marcos", click:compt++})
    // span_increment.style.display = "block"
    // total_shop.innerHTML = (Number(total_shop.textContent) + Number(tab[index])).toFixed(2);
    // let tr = document.createElement('tr')
    // tr.innerHTML =
    //     `
    //         <td></td>
    //         <td id="total_add_click">1</td>
    //         <td id="total_command">${tab[index]}</td>
    //         <td ><buttton id="delete_product_select" style="background-color:#0c6588; padding:1rem ; color:white ; text-align:right"; >X</button></td>               
    // `
    // tr.style.padding = "1.2rem"
    // table1.prepend(tr)
    // console.log(delete_product_select);
})

/********************************end add element to modal*/



/********************************close part*/

// let closse = document.querySelector("#close1");
// closse.addEventListener("click", function (e) {
//     e.preventDefault();
//     openModal.style.display = "none";
// })

// let closse1 = document.querySelector("#close2");
// closse1.addEventListener("click", function (e) {
//     e.preventDefault();
//     openModal2.style.display = "none";
// })

/*****************************end close part*/


