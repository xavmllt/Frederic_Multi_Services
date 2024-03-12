import SliderModule from "./slider.js";

const images = ["../assets/plomberie/changementevier.jpg", "../assets/plomberie/installationwc.jpg", "../assets/plomberie/miroir.jpg", "../assets/plomberie/robinneterie.jpg"];

document.getElementById("precedent").addEventListener("click", function() {
    SliderModule.ChangeSlide(-1, images);
});

document.getElementById("suivant").addEventListener("click", function() {
    SliderModule.ChangeSlide(1, images);
});