$(function () {

    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        loopedSlides: 14,
        slidesPerView: 1,
        centeredSlides: true,

        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

});