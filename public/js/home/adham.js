
function myNav() {
    let bar = document.getElementById("bar");
    let nav = document.querySelector(".navigation");
    bar.onclick = () => {
        if (nav.style.right == "0%") {
            nav.style.right = "-100%";
            bar.classList = "fas fa-bars";
            header.classList.add("active")


        } else {
            nav.style.right = "0%";
            bar.classList = "fa-solid fa-xmark";
        }
    }
} myNav();
function sayHeader() {
    let header = document.getElementById("header");
    window.addEventListener("scroll", function () {
        if (this.window.scrollY > 0) {
            header.classList.add("active")
        }
        else {

            header.classList.remove("active")
            i.classList.add("by");
        }
    })
} sayHeader();