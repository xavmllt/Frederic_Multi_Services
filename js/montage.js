import SliderModule from "./slider.js";

const images = ["../assets/montage/installation.jpg", "../assets/montage/ikea.jpg", "../assets/montage/dressing.jpg", "../assets/montage/cuisineInstallation.jpg", "../assets/montage/cuisineIkea.jpg", "../assets/montage/cuisineIkea1.jpg", "../assets/montage/cuisineComplete.jpg", "../assets/montage/cuisineComplet.jpg", "../assets/montage/cuisineBrico.jpg", "../assets/montage/cuisine.jpg", "../assets/montage/credence.jpg", "../assets/montage/conception.jpg" ];

document.getElementById("precedent").addEventListener("click", function() {
    SliderModule.ChangeSlide(-1, images);
});

document.getElementById("suivant").addEventListener("click", function() {
    SliderModule.ChangeSlide(1, images);
});