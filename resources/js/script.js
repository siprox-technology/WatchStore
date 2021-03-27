(function ($) {
    'use strict';

    // Subscription Modal Show
    var show = function () {
        $('#subscriptionModal').modal('show');
    };
    // Preloader
    $(window).on('load', function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
        var timer = window.setTimeout(show, 2000);
    });

    // Background-images
    $('[data-background]').each(function () {
        $(this).css({
            'background-image': 'url(' + $(this).data('background') + ')'
        });
    });

    //  Search Form Open
    $('#searchOpen').on('click', function () {
        $('.search-wrapper').toggleClass('open');
        $('.search-btn').toggleClass('search-close');
    });

    //  Cart Open
    $('#cartOpen').on('click', function () {
        $('.cart-wrapper').addClass('open');
    });
    $('#cartClose').on('click', function () {
        $('.cart-wrapper').removeClass('open');
    });

    //Hero Slider
    $('.hero-slider').slick({
        autoplay: true,
        autoplaySpeed: 7500,
        lazyLoad: 'progressive',
        speed: 100,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinite: true,
        arrows: true,
        prevArrow: '<button type=\'button\' class=\'prevArrow\'></button>',
        nextArrow: '<button type=\'button\' class=\'nextArrow\'></button>',
        dots: false,
        responsive: [{
            breakpoint: 576,
            settings: {
                arrows: false
            }
        }]
    });
    $('.hero-slider').slickAnimation();

    // collection slider
    $('.collection-slider').slick({
        dots: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //  collection item quick view
    $('.venobox').venobox({
        framewidth: '80%',
        frameheight: '100%'
    });

    // deal timer
    var dealYear = $('#simple-timer').attr('data-year');
    var dealMonth = $('#simple-timer').attr('data-month');
    var dealDay = $('#simple-timer').attr('data-day');
    var dealHour = $('#simple-timer').attr('data-hour');
    $('#simple-timer').syotimer({
        year: dealYear,
        month: dealMonth,
        day: dealDay,
        hour: dealHour,
        minute: 0
    });


    // sale timer
    var saleYear = $('#sale-timer').attr('data-year');
    var saleMonth = $('#sale-timer').attr('data-month');
    var saleDay = $('#sale-timer').attr('data-day');
    var saleHour = $('#sale-timer').attr('data-hour');
    $('#sale-timer').syotimer({
        year: saleYear,
        month: saleMonth,
        day: saleDay,
        hour: saleHour,
        minute: 0
    });

    // Count Down JS
    $('#comingSoon').syotimer({
        year: 2019,
        month: 5,
        day: 9,
        hour: 20,
        minute: 30
    });

    // instafeed
    if (($('#instafeed').length) !== 0) {
        var userId = $('#instafeed').attr('data-userId');
        var accessToken = $('#instafeed').attr('data-accessToken');
        var userFeed = new Instafeed({
            get: 'user',
            userId: userId,
            resolution: 'low_resolution',
            accessToken: accessToken,
            limit: 6,
            template: '<div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4"><div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{image}}" alt="instagram-image"><ul class="list-inline text-center"><li class="list-inline-item"><a href="{{link}}" target="_blank" class="text-white"><i class="ti-heart mr-2"></i>{{likes}}</a></li><li class="list-inline-item"><a href="{{link}}" target="_blank" class="text-white"><i class="ti-comments mr-2"></i>{{comments}}</a></li></ul></div></div>'
        });
        userFeed.run();
    }

    // product Slider
    $('.product-slider').slick({
        autoplay: false,
        infinite: true,
        arrows: true,
        prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-arrow-left\'></i></button>',
        nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-arrow-right\'></i></button>',
        dots: true,
        customPaging: function (slider, i) {
            var image = $(slider.$slides[i]).data('image');
            return '<img class="img-fluid" src="' + image + '" alt="product-img">';
        }
    });

    // image zoom
    $('.image-zoom')
        .wrap('<span></span>')
        .css('display', 'block')
        .parent()
        .zoom({
            on: 'click',
            url: $(this).find('img').attr('data-zoom')
        });

    // touchspin
    $('input[name=\'quantity\']').TouchSpin({
        verticalbuttons: true,
        initval: 1,
        verticalupclass: 'angle-up',
        verticaldownclass: 'angle-down'
    });
    $('input[name=\'cart-quantity\']').TouchSpin({
        initval: 40
    });

    // nice select
    $('select').niceSelect();

    // checked
    $('.label').click(function () {
        $(this).find('.size-checkbox').toggleClass('checked');
    });

    // bootstrap slider range
    $('.range-track').slider({});
    $('.range-track').on('slide', function (slideEvt) {
        $('.value').text('$' + slideEvt.value[0] + ' - ' + '$' + slideEvt.value[1]);
    });

    // tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    // sticky-menu
    var navbar = $('#navbar');
    var mainWrapper = $('.main-wrapper');
    var sticky = navbar.offset().top;
    $(window).scroll(function () {
        if ($(document).scrollTop() >= sticky) {
            navbar.addClass('sticky');
            mainWrapper.addClass('main-wrapper-section');
        } else {
            navbar.removeClass('sticky');
            mainWrapper.removeClass('main-wrapper-section');
        }
    });


})(jQuery);


/*rating stars*/
let fadeInStar = () => {
    let starItem = $('#rattingIcon .fa-star.fas');
    starItem.addClass('scale-star');
    setTimeout(function () {
        starItem.removeClass('scale-star');
    }, 180);
}
let ratingText = $('#ratingText');
let star_number = $('#star_number');
let fadeInStarText = n => {
    ratingText.addClass('scale-price');
    setTimeout(function () {
        ratingText.removeClass('scale-price');
        switch (n) {
            case 0:
                ratingText.text('Poor');
                star_number.val('1');
                break;
            case 1:
                ratingText.text('Average');
                star_number.val('2');
                break;
            case 2:
                ratingText.text('Good');
                star_number.val('3');
                break;
            case 3:
                ratingText.text('Very Good');
                star_number.val('4');
                break;
            case 4:
                star_number.val('5');
                ratingText.text('Excellent');
        }
    }, 180);
}

$("#rattingIcon .fa-star").on('click', function () {
    let iconIndex = $(this).index();
    $(this).addClass("fas").removeClass("far");
    $(this).prevAll().addClass("fas").removeClass("far");
    $(this).nextAll().addClass("far").removeClass("fas");
    fadeInStar();
    fadeInStarText(iconIndex);
});

/* smooth scroll */
$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1200, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});
