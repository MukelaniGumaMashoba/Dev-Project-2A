const buttons = document.querySelectorAll(".navBtn");
const slides = document.querySelectorAll(".videos");
const content = document.querySelectorAll(".content");

var slider = function(manual){
    buttons.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    content.forEach((con) => {
        con.classList.remove("active");
    });

    buttons[manual].classList.add("active");
    slides[manual].classList.add("active");
    content[manual].classList.add("active");
};

buttons.forEach((btn, i) => {
    btn.addEventListener("click", () =>{
        slider(i);
    })
} );