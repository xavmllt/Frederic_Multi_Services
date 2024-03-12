import SliderModule from "./slider.js";

const images = ["../assets/maconnerie/cloture.jpg"];

document.getElementById("precedent").addEventListener("click", function() {
    SliderModule.ChangeSlide(-1, images);
});

document.getElementById("suivant").addEventListener("click", function() {
    SliderModule.ChangeSlide(1, images);
});