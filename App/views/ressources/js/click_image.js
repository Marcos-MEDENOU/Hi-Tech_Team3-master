
let tab = ["../../../Public/ressources/images/product-1/slide-1-lg.jpg", "../../../Public/ressources/images/product-1/slide-2-lg.jpg", "../../../Public/ressources/images/product-1/slide-3-lg.jpg", "../../../Public/ressources/images/product-1/slide-4-lg.jpg", "../../../Public/ressources/images/product-1/slide-5-lg.jpg"]
let container = document.querySelector(".product-picture>img");
let images_block = document.querySelectorAll(".images div img");
images_block.forEach(function (element, index) {
    element.addEventListener("click", function (e) {
        e.preventDefault();
        container.setAttribute("src", tab[index]);
    })
});

/*Script largest modal*/

let closes = document.querySelector("#close3");
let openModal = document.querySelector("#openModal3")
closes.addEventListener("click", function (e) {
    openModal.style.display = "none";
})

container.addEventListener("click", function (e) {
    let container_modal = document.querySelector(".container_modal>img")
    let srcSource = container.getAttribute("src")
    openModal.style.display = "block";
    container_modal.setAttribute("src", srcSource)
})
let modal_image = document.querySelector("#modal_image")
let images_zone = document.querySelectorAll(".images_zone img");

images_zone.forEach(function (element, index) {
    element.addEventListener("click", function (e) {
        e.preventDefault();
        console.log("click");
        let srcSource = element.getAttribute("src")
        console.log(srcSource);
        modal_image.setAttribute("src", srcSource);
    })
});

