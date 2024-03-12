import SliderModule from "./slider.js";

const images = ["../assets/electricite/disjoncteur.jpg", "../assets/electricite/lumiere.jpg", "../assets/electricite/moduleyokis.jpg", "../assets/electricite/spoteclairage.jpg", "../assets/electricite/tableauelectrique.jpg"];

document.getElementById("precedent").addEventListener("click", function() {
    SliderModule.ChangeSlide(-1, images);
});

document.getElementById("suivant").addEventListener("click", function() {
    SliderModule.ChangeSlide(1, images);
});


