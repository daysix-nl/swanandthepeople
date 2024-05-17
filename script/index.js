
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 0,
    effect: "fade",
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".slider-1-next",
        prevEl: ".slider-1-prev",
    },
});

var swiper = new Swiper(".mySwiperProducts", {
    slidesPerView: 1.6,
    spaceBetween: 15,
    grabCursor: true,
    freeMode: true,
    breakpoints: {
        768: {
            slidesPerView: 3.3,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 4.2,
            spaceBetween: 20,
        },
        1352: {
            slidesPerView: "5",
            spaceBetween: 20,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },

});



try {
    // JavaScript-code om class te togglen
    document.getElementById('menu').addEventListener('click', function () {
        // Verkrijg het body-element
        var bodyElement = document.body;

        // Toggle class 'active' en 'non-active' op het body-element
        bodyElement.classList.toggle('menu-active');
        bodyElement.classList.toggle('menu-non-active');
    });

    // Toggle class wanneer op element met class .overlay-menu wordt geklikt
    var overlayMenuElements = document.querySelectorAll('.overlay-menu');
    overlayMenuElements.forEach(function (element) {
        element.addEventListener('click', function () {
            // Verkrijg het body-element
            var bodyElement = document.body;

            // Toggle class 'active' en 'non-active' op het body-element
            bodyElement.classList.toggle('menu-active');
            bodyElement.classList.toggle('menu-non-active');
        });
    });
} catch (error) { }



var swiper = new Swiper(".mySwiperSingleProduct", {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    direction: "vertical",
    grabCursor: true,
    watchSlidesProgress: true,

});
var swiper2 = new Swiper(".mySwiper2", {
    effect: "fade",
    grabCursor: true,
    navigation: {
        nextEl: ".slider-1-next",
        prevEl: ".slider-1-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});



try {
    const buttonClosePopUp = document.querySelector(".closePopUp");
    const popUp = document.querySelector(".pop_up");

    const closePopupAndSetCookie = () => {
        let date = new Date();
        date.setDate(date.getDate() + 1);
        document.cookie = "popup=yes; expires=" + date.toUTCString() + ";";
        popUp.classList.add("hidden");
    };

    buttonClosePopUp.addEventListener("click", closePopupAndSetCookie);
    popUp.addEventListener("click", closePopupAndSetCookie);
} catch (error) { }



/**********************/
/**** accordion ***/
/**********************/
try {
    const acc = document.getElementsByClassName("accordion");

    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            const panel = this.nextElementSibling;
            this.classList.toggle("active");
            panel.style.height =
                panel.style.height === panel.scrollHeight + "px"
                    ? "0"
                    : panel.scrollHeight + "px";

            for (let j = 0; j < acc.length; j++) {
                if (this !== acc[j]) {
                    acc[j].classList.remove("active");
                    acc[j].nextElementSibling.style.height = "0";
                }
            }
        });
    }
} catch (error) { }

try {
    var swiper = new Swiper(".mySwiperTestimonials", {
        effect: "fade",
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: true,
        },
        navigation: {
            nextEl: ".slider-2-next",
            prevEl: ".slider-2-prev",
        },
    });
} catch (error) { }


function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.add("hidden");
    }
    tablinks = document.getElementsByTagName("button");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active-button");
    }
    document.getElementById(tabName).classList.remove("hidden");
    evt.currentTarget.classList.add("active-button");
}



try {
    var swiperHero = new Swiper(".swiperhero", {
        spaceBetween: 40,
        lazy: false,
        freeMode: true,
        loop: true,
        speed: 250000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        breakpoints: {
            640: {
                speed: 250000,
            },
            768: {
                speed: 250000,
            },
            1024: {
                speed: 250000,
            },
        },
    });
} catch (error) { }