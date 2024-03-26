const processSwiper = new Swiper('.process-curosel', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
const productSwiper = new Swiper('.product-curosel', {
    slidesPerView:4,
    spaceBetween:20,
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    autoplay: {
        delay: 2000,
      },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetweenSlides: 30
        },
        580: {
            slidesPerView: 2,
            spaceBetweenSlides: 30
        },
        // when window width is <= 999px
        1024: {
            slidesPerView: 4,
            spaceBetweenSlides: 40
        }
    },
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
