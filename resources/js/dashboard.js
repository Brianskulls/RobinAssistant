//Custom select dropdown
document.querySelector('.custom-select-wrapper').addEventListener('click', function() {
    this.querySelector('.custom-select').classList.toggle('open');
});

for (const option of document.querySelectorAll(".custom-option")) {
    option.addEventListener('click', function() {
        if (!this.classList.contains('selected')) {
            this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
            this.classList.add('selected');
            this.closest('.custom-select').querySelector('.custom-select__trigger span').textContent = this.textContent;
        }
    });
}

window.addEventListener('click', function(e) {
    const select = document.querySelector('.custom-select');
    if (!select.contains(e.target)) {
        select.classList.remove('open');
    }
});

//Collapsible menu
let menu  = document.querySelector('.menu');


menu.addEventListener('click', function() {
    menu.classList.toggle('open');
    menu.classList.toggle('active');
    let content = document.querySelector('menu-content');
    if (content.style.display === "block") {
            content.style.display = "none";
            this.style.borderBottomRightRadius = "37px";
            this.style.borderBottomLeftRadius = "37px";
        } else {
            content.style.display = "block";
            this.style.borderBottomRightRadius = "0px";
            this.style.borderBottomLeftRadius = "0px";
        }
});


// const coll = document.getElementsByClassName("menu");
// let i;
//
// for (i = 0; i < coll.length; i++) {
//     coll[i].addEventListener("click", function() {
//         this.classList.toggle("active");
//         let content = this.nextElementSibling;
//         if (content.style.display === "block") {
//             content.style.display = "none";
//             this.style.borderBottomRightRadius = "37px";
//             this.style.borderBottomLeftRadius = "37px";
//         } else {
//             content.style.display = "block";
//             this.style.borderBottomRightRadius = "0px";
//             this.style.borderBottomLeftRadius = "0px";
//         }
//     });
//}

