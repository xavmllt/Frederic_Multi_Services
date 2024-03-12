const SliderModule = (() => {
    let numero = 0; // pour que la variable soit lue

    function ChangeSlide(sens, images) {
        numero += sens;
        if (numero < 0)
            numero = images.length - 1;
        if (numero >= images.length)
            numero = 0;
        
        document.getElementById("slide").src = images[numero];
        document.getElementById("numeroSlide").innerText = (numero + 1) + " / " + images.length;
    }

    return { ChangeSlide };
})();

export default SliderModule;









