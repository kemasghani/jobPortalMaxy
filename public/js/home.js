document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("searchInput");
    var inputContainer = document.querySelector(".inputSearchContainer");

    searchInput.addEventListener("focus", function () {
        inputContainer.classList.add("active");
    });

    searchInput.addEventListener("blur", function () {
        inputContainer.classList.remove("active");
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("mapInput");
    var inputContainer = document.querySelector(".inputMapContainer");

    searchInput.addEventListener("focus", function () {
        inputContainer.classList.add("active");
    });

    searchInput.addEventListener("blur", function () {
        inputContainer.classList.remove("active");
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var carousel = new bootstrap.Carousel(document.getElementById('contentCarousel'));

    // Hide or show prev and next buttons based on slide position
    carousel.addEventListener('slid.bs.carousel', function (event) {
        var currentIndex = event.to;
        var totalSlides = carousel._items.length;

        // Hide or show prev button
        if (currentIndex === 0) {
            document.querySelector('.carousel-control-prev').style.display = 'none';
        } else {
            document.querySelector('.carousel-control-prev').style.display = 'block';
        }

        // Hide or show next button
        if (currentIndex === totalSlides - 1) {
            document.querySelector('.carousel-control-next').style.display = 'none';
        } else {
            document.querySelector('.carousel-control-next').style.display = 'block';
        }
    });
});