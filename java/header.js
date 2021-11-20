var MenuItems = document.querySelector("ul");
MenuItems.style.maxHeight = "0px" ;
function menutoggle() {
    if (MenuItems.style.maxHeight == "0px")
    {
        MenuItems.style.maxHeight = "200px"
    }
    else
    {
        MenuItems.style.maxHeight = "0px"
    }
}

let input = document.querySelector("#search")
let search = document.querySelector("#search");
let fdj = document.querySelector("label.fas.fa-search");
let nav = document.querySelector("ul");
search.addEventListener("mouseenter", e => { nav.style.display = "none"; });
search.addEventListener("mouseleave", e => { nav.style.display = "block"; });
input.addEventListener("focus", e => { fdj.style.display = "none"; });
input.addEventListener("blur", e => { fdj.style.display = "block"; });