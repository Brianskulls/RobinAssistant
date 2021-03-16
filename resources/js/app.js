require('./bootstrap');

require('alpinejs');


window.onload = (event) => {
    // Change language flag
    document.getElementById('english').onclick = function changeEnglish() {
        document.getElementById('flag').src="../images/english-flag.svg";
    };

    document.getElementById('russian').onclick = function changeRussian() {
        document.getElementById('flag').src="../images/russian-flag.svg";
    };

    document.getElementById('dutch').onclick = function changeDutch() {
        document.getElementById('flag').src="../images/dutch-flag.png";
    };

    document.getElementById('german').onclick = function changeGerman() {
        document.getElementById('flag').src="../images/german-flag.png";
    };

    document.getElementById('spanish').onclick = function changeSpain() {
        document.getElementById('flag').src="../images/spain-flag.png";
    };

    // Heart animation in the header, made with GSAP
    var tl = new TimelineMax({repeat: -1});

    $(".heartAnimation").each(function (index, element) {
        tl.to(element, 1, {y: 70, opacity: 1})
            .to(element, 1, {y: 170, opacity: 0, ease: Power1.easeIn}, "+=0.5")
    });

    // Smooth scroll when clicking anchor link
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
};

