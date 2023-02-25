new Swiper('.our-team-slider', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    slidesPerView: 3,
    spaceBetween: 10
});

new Swiper('.portfolio-examples', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    slidesPerView: 1,

    breakpoints: {
        840: {
            slidesPerView: 2
        }
    }
});