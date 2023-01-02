const arrow = document.querySelector(".sidebar-arrow");
const sidebar= document.querySelector(".sidebar");
const sidebarOptions= document.querySelectorAll(".sidebar-options");
const mediaQueryLaptop = window.matchMedia('(min-width: 768px)');


arrow.addEventListener('click', function(){
    sidebar.classList.toggle("sidebar-out");
    arrow.classList.toggle("sidebararrow-out");
});


sidebarOptions.forEach(options => {
options.addEventListener('click', function(){
    const mediaque =  window.matchMedia("(max-width: 768px)");
    if(mediaque.matches){
    sidebar.classList.toggle("sidebar-out");
    arrow.classList.toggle("sidebararrow-out");
    
    }else{
        console.log("hola")
    }
    
})
})

function activeSidebarLaptop(){
    if (mediaQueryLaptop.matches) {
        sidebar.classList.remove("sidebar-out");
    arrow.classList.remove("sidebararrow-out");
}}

activeSidebarLaptop();

