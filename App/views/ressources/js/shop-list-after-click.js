
//This program is responsible for making the shelves appear after a click on the store
/**Un exemple juste pour tester la fonction */
let elem_at_click = document.querySelectorAll('.shop-title')
let appearElem=document.querySelectorAll(".scroll_menu_shop")

//clickElem est l'élément sur lequel le clic sera éffectué cela corespond au querrySelecteur de tous les boutiques
//appearElem est l'element qui apparait au click
function appear_after_click(clickElem, appearElem) {
    clickElem.forEach(function(element,index) {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            if (appearElem[index].style.display == "none") {
                appearElem[index].style.display = "table-row";
            } else {
                appearElem[index].style.display = "none"; 
            }
        })
    });
}
appear_after_click(elem_at_click, appearElem)
console.log(elem_at_click);