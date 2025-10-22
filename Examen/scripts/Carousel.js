let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("Slides");
    let dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    //Hide all Slides
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" bg-secondary", "");
    }
    // Deactivate all dots

    if (slideIndex >= slides.length) {
        //Greate or Equal to
        console.log(
            `index:${slideIndex} is Greater than or Equal to slideLength${slides.length}`,
        );
        slideIndex = 0;
    } else {
        console.log(`${slideIndex} is less than ${slides.length}`);
    }
    if (slideIndex < 0) {
        console.log(`${slideIndex} is less than 0`);
        slideIndex = slides.length - 1;
    } else {
        console.log(`${slideIndex} is More than 0`);
    }
    slides[slideIndex].style.display = "block";
    dots[slideIndex].className += " bg-secondary";
    console.log(slideIndex);
}
