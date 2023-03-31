

const cellphone = document.querySelector('#section1R :nth-child(2)');

gsap.to(cellphone , {
    scrollTrigger:{
        trigger: cellphone,
        start: "top center",
        end:"top 100px",
        
        markers:true
    },
    y:200,
    ease:"none",
    duration:3
});