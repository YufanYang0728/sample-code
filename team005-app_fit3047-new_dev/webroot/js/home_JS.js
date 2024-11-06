/*!
* Start Bootstrap - Heroic Features v5.0.6 (https://startbootstrap.com/template/heroic-features)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-heroic-features/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Switch between pages
// document.getElementById("btn_login_Student").addEventListener("click", function() {
//     window.location.href="/Pages/StudentDashboard.php";
// });
function togglePopup() {
    const popup = document.getElementById("aboutPopup");
    popup.style.display = popup.style.display === "none" ? "block" : "none";
}


window.onload = function() {
    let images = [
        "webroot/img/slide_image_1/im11.jpg",
        "webroot/img/slide_image_2/im22.jpg",
        "webroot/img/slide_image_3/im33.jpg"
    ];

    let currentSlide = 0;
    const slide = document.querySelector(".slideshow-container img");

    function changeSlide() {
        currentSlide = (currentSlide + 1) % images.length;
        slide.onload = function() {
            slide.style.opacity = 1;
            setTimeout(function() { slide.style.opacity = 0; }, 3000); // fade out after 3 seconds
        };
        slide.src = images[currentSlide];
        slide.style.opacity = 0;
    }
    setTimeout(changeSlide, 3000); // add a delay of 3 seconds before changing the slide

    setInterval(function() {
        changeSlide();
    }, 5000);
};



