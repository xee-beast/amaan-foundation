(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        initStickyHeader();
        initHidePage();
        initTopBarClose();
        initCarousels();
        initNewsletterForm();
    });

    function initStickyHeader() {
        var header = document.querySelector('.header-update');
        if (!header) {
            return;
        }

        header.classList.add('sticky');

        window.addEventListener('scroll', function () {
            var currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                header.classList.add('sticky');
            } else if (currentScroll > 100) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });
    }

    function initHidePage() {
        document.querySelectorAll('.js-hide-page, .hide-content-bar').forEach(function (el) {
            el.addEventListener('click', function (event) {
                event.preventDefault();
                window.location.replace('https://www.google.com');
            });
        });
    }

    function initTopBarClose() {
        document.querySelectorAll('.notifi-icon').forEach(function (icon) {
            icon.addEventListener('click', function () {
                var topBar = icon.closest('.top-navbar-contact');
                if (topBar) {
                    topBar.style.display = 'none';
                }
            });
        });
    }

    function initCarousels() {
        if (typeof Splide !== 'undefined') {
            document.querySelectorAll('.splide').forEach(function (el) {
                if (el.dataset.splideInitialized) {
                    return;
                }

                new Splide(el, {
                    type: 'loop',
                    perPage: 3,
                    gap: '1rem',
                    pagination: false,
                    breakpoints: {
                        1024: { perPage: 2 },
                        640: { perPage: 1 },
                    },
                }).mount();

                el.dataset.splideInitialized = 'true';
            });
        }

        if (typeof jQuery !== 'undefined' && jQuery.fn.slick) {
            jQuery('.slider-section .slider, .slick-slider').each(function () {
                var $el = jQuery(this);
                if (!$el.hasClass('slick-initialized')) {
                    $el.slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        responsive: [
                            { breakpoint: 1024, settings: { slidesToShow: 2 } },
                            { breakpoint: 640, settings: { slidesToShow: 1 } },
                        ],
                    });
                }
            });
        }
    }

    function initNewsletterForm() {
        document.querySelectorAll('form.w-form').forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
            });
        });
    }
})();
