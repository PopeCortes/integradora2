

// const dropdownBtn = document.querySelector(".dropdown-btn");
// const dropdownContent = document.querySelector(".dropdown-content");

// dropdownBtn.addEventListener("click", function () {
// if (dropdownContent.style.display === "none") {
//     console.log('abre');
//     dropdownContent.style.display = "block";
// } else {
//     console.log('error');
//     dropdownContent.style.display = "none";
// }
// });

$(document).on("click", "#next", function (){
    $(this).next().slideToggle();
})