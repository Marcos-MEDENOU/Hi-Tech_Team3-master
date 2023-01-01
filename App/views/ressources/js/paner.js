
let span_increment = document.querySelector(".quantity_paner");
let buttonAdd = document.querySelector(".button_add");      
       
       
        let prices_for_all_shop = document.querySelectorAll(".price")
        let openModal = document.querySelector("#openModal")
        let openModal2 = document.querySelector("#openModal2")
        
        
        let panner_increment = document.querySelector(".panner_increment>span");
        let total_shop = document.querySelector(".total_shop")
        let total_add_click = document.querySelector("#total_add_click")
        let total_command = document.querySelector("#total_command")
        let table1 = document.querySelector("#table1")
        let delete_product_select = document.querySelectorAll("#table1 tr")

/****************** all prices to number******************/
        function convertToNumber(number) {
            return Number(number)
        }
        /****************** end all prices to number************/


        /*************************************add element to modal*/
        // buttonAdd.forEach(function (element, index) {
            buttonAdd.addEventListener("click", function (e) {
                console.log("clickk");
                e.preventDefault();
                let compt=0;
                // obj_tab.push({name:"marcos", click:compt++})
                span_increment.textContent++;
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
        let closse = document.querySelector("#close1");
        closse.addEventListener("click", function (e) {
            e.preventDefault();
            openModal.style.display = "none";
        })

        let closse1 = document.querySelector("#close2");
        closse1.addEventListener("click", function (e) {
            e.preventDefault();
            openModal2.style.display = "none";
        })
        /*****************************end close part*/



        /********************************add prices*/
        tab = [];
        prices_for_all_shop.forEach(function (el) {
            tab.push(el.textContent)
        })
        /*****************************end add prices*/



        /**********************************panner shop increment*/
        panner_increment.addEventListener("click", function (e) {
            e.preventDefault()
            if (convertToNumber(span_increment.textContent) === 0) {
                console.log("k");
                openModal.style.display = "block";
            } else {
                total_add_click.textContent = span_increment.textContent;
                total_command.textContent = total_shop.textContent + "€";
                openModal2.style.display = "block";
            }
        })
        /******************************end panner shop increment*/
