

let click_account = document.querySelector(".user-account-item>div>a")
let div1 = document.getElementById("openModal")
let div2=document.getElementById("openModal2")
let close1 = document.getElementById("close1")
let close2 = document.getElementById("close2")
let create_account = document.getElementById("create_account")
let redirect_connexion = document.getElementById("redirect_connexion")
click_account.addEventListener("click", function (element, index) {
    div1.style.display = "block";
})

close1.addEventListener("click", function (e) {
    e.preventDefault()
    div1.style.display = "none";
})

close2.addEventListener("click", function (e) {
    e.preventDefault()
    div2.style.display = "none";
})


create_account.addEventListener("click", function (e) {
    e.preventDefault()
    div1.style.display = "none";
    div2.style.display = "block";
})

redirect_connexion.addEventListener("click", function (e) {
    e.preventDefault()
    div2.style.display = "none";
    div1.style.display = "block";
})
