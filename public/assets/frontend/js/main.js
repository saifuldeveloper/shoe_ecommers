(function($) {
    "use strict";

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }

    function backgroundImage() {
        var databackground = $('[data-background]');
        databackground.each(function() {
            if ($(this).attr('data-background')) {
                var image_path = $(this).attr('data-background');
                $(this).css({
                    'background': 'url(' + image_path + ')'
                });
            }
        });
    }

    function parallax() {
        $('.bg--parallax').each(function() {
            var el = $(this),
                xpos = "50%",
                windowHeight = $(window).height();
            if (isMobile.any()) {
                $(this).css('background-attachment', 'scroll');
            } else {
                $(window).scroll(function() {
                    var current = $(window).scrollTop(),
                        top = el.offset().top,
                        height = el.outerHeight();
                    if (top + height < current || top > current + windowHeight) {
                        return;
                    }
                    el.css('backgroundPosition', xpos + " " + Math.round((top - current) * 0.2) + "px");
                });
            }
        });
    }

    function menuBtnToggle() {
        var toggleBtn = $('.menu-toggle'),
            sidebar = $('.header--sidebar'),
            menu = $('.menu');
        toggleBtn.on('click', function(event) {
            var self = $(this);
            self.toggleClass('active');
            $('.ps-main, .header').toggleClass('menu--active');
            sidebar.toggleClass('active');
        });
    }

    function subMenuToggle() {
        $('body').on('click', '.header--sidebar .menu .menu-item-has-children > a', function(event) {
            event.preventDefault();
            var current = $(this).parent('.menu-item-has-children')
            current.children('.sub-menu').slideToggle(350);
            current.children('.mega-menu').slideToggle(350);
            current.siblings().find('.sub-menu').slideUp(350);
            current.siblings().find('.mega-menu').slideUp(350);
        });
    }

    function resizeHeader() {
        var header = $('.header'),
            headerSidebar = $('.header--sidebar'),
            menu = $('.menu'),
            checkPoint = 1200,
            windowWidth = $(window).innerWidth();
        // mobile
        if (checkPoint > windowWidth) {
            $('.menu').find('.sub-menu').hide();
            menu.find('.menu').addClass('menu--mobile');
            menu.prependTo('.header--sidebar');
            $('.ps-sticky').addClass('desktop');
        }
        else {
            $('.menu').find('.sub-menu').show();
            header.removeClass('header--mobile');
            menu.prependTo('.navigation__column.center');
            menu.removeClass('menu--mobile');
            $('.header--sidebar').removeClass('active');
            $('.ps-main, .header').removeClass('menu--active');
            $('.menu-toggle').removeClass('active');
            $('.ps-sticky').removeClass('desktop');
        }
        /*logo*/
        if (windowWidth < 480) {
            $('.ps-search--header').prependTo('.header--sidebar');
        }
        else {
            $('.ps-search--header').insertBefore('.ps-cart');
        }
    }

    function stickyHeader() {
        var header = $('.header'),
            scrollPosition = 0,
            headerTopHeight = $('.header .header__top').outerHeight(),
            checkpoint = 300;
             var cartIcon = $('#show_hide_cart'); 
        $(window).scroll(function() {
            var currentPosition = $(this).scrollTop();
            if (currentPosition < scrollPosition) {
                // On top
                if (currentPosition == 0) {
                    header.removeClass('navigation--sticky navigation--unpin navigation--pin');
                    header.css("margin-top", 0);
                     cartIcon.css('display', 'none');
                }
                // on scrollUp
                else if (currentPosition > checkpoint) {
                    header.removeClass('navigation--unpin').addClass('navigation--sticky navigation--pin');
                     cartIcon.css('display', 'block'); 
                }
            }
            // On scollDown
            else {
                if (currentPosition > checkpoint) {
                    header.addClass('navigation--unpin').removeClass('navigation--pin');
                    header.css("margin-top", -headerTopHeight);
                     cartIcon.css('display', 'block'); 
                }
            }
            scrollPosition = currentPosition;
        });
    }

    function owlCarousel(target) {
        if (target.length > 0) {
            target.each(function() {
                var el = $(this),
                    dataAuto = el.data('owl-auto'),
                    dataLoop = el.data('owl-loop'),
                    dataSpeed = el.data('owl-speed'),
                    dataGap = el.data('owl-gap'),
                    dataNav = el.data('owl-nav'),
                    dataDots = el.data('owl-dots'),
                    dataAnimateIn = (el.data('owl-animate-in')) ? el.data('owl-animate-in') : '',
                    dataAnimateOut = (el.data('owl-animate-out')) ? el.data('owl-animate-out') : '',
                    dataDefaultItem = el.data('owl-item'),
                    dataItemXS = el.data('owl-item-xs'),
                    dataItemSM = el.data('owl-item-sm'),
                    dataItemMD = el.data('owl-item-md'),
                    dataItemLG = el.data('owl-item-lg'),
                    dataNavLeft = (el.data('owl-nav-left')) ? el.data('owl-nav-left') : "<i class='ps-icon-back'></i>",
                    dataNavRight = (el.data('owl-nav-right')) ? el.data('owl-nav-right') : "<i class='ps-icon-next'></i>",
                    duration = el.data('owl-duration'),
                    datamouseDrag = (el.data('owl-mousedrag') == 'on') ? true : false;
                el.owlCarousel({
                    animateIn: dataAnimateIn,
                    animateOut: dataAnimateOut,
                    margin: dataGap,
                    autoplay: dataAuto,
                    autoplayTimeout: dataSpeed,
                    autoplayHoverPause: true,
                    loop: dataLoop,
                    nav: dataNav,
                    mouseDrag: datamouseDrag,
                    touchDrag: true,
                    autoplaySpeed: duration,
                    navSpeed: duration,
                    dotsSpeed: duration,
                    dragEndSpeed: duration,
                    navText: [dataNavLeft, dataNavRight],
                    dots: dataDots,
                    items: dataDefaultItem,
                    responsive: {
                        0: {
                            items: dataItemXS
                        },
                        480: {
                            items: dataItemSM
                        },
                        768: {
                            items: dataItemMD
                        },
                        992: {
                            items: dataItemLG
                        },
                        1200: {
                            items: dataDefaultItem
                        }
                    }
                });
            });
        }
    }

    function navigateOwlCarousel() {
        var container = $('.ps-owl-root'),
            owl = $('.ps-owl--colection'),
            prev = container.find('.ps-owl-actions .ps-prev'),
            next = container.find('.ps-owl-actions .ps-next');
        if (container.length > 0) {
            prev.on('click', function(e) {
                e.preventDefault();
                owl.trigger('prev.owl.carousel', [300]);
            })
            next.on('click', function(e) {
                e.preventDefault();
                owl.trigger('next.owl.carousel');
            });
        }
    }

    function countDown() {
        var time = $(".ps-countdown");
        time.each(function() {
            var el = $(this),
                value = $(this).data('time');
            var countDownDate = new Date(value).getTime();
            var timeout = setInterval(function() {
                var now = new Date().getTime(),
                    distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24)),
                    hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                    minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                    seconds = Math.floor((distance % (1000 * 60)) / 1000);
                // el.find('.days').html(days);
                el.find('.hours').html(days * 24 + hours);
                el.find('.minutes').html(minutes);
                el.find('.seconds').html(seconds);
                if (distance < 0) {
                    clearInterval(timeout);
                    el.closest('.ps-section').hide();
                }
            }, 1000);
        });
    }

    function masonry() {
        var masonryTrigger = $('.ps-masonry');
        if (masonryTrigger.length > 0) {
            masonryTrigger.imagesLoaded(function() {
                masonryTrigger.isotope({
                    columnWidth: '.grid-sizer',
                    itemSelector: '.grid-item'
                });
            });
            var filters = masonryTrigger.closest('.masonry-root').find('.ps-masonry__filter > li > a');
            filters.on('click', function() {
                var selector = $(this).attr('data-filter');
                filters.find('a').removeClass('current');
                $(this).parent('li').addClass('current');
                $(this).parent('li').siblings('li').removeClass('current');
                console.log($(this));
                masonryTrigger.isotope({
                    itemSelector: '.grid-item',
                    isotope: {
                        columnWidth: '.grid-sizer'
                    },
                    filter: selector
                });
                return false;
            });
        }
    }

    function rating() {
        $('.ps-rating').barrating({
            theme: 'fontawesome-stars'
        });
    }

    function initMap() {
        var myLatLng = {
            lat: 43.6222102,
            lng: -79.6694881
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            scrollwheel: true,
            zoom: 16,
            center: myLatLng
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            draggarble: false
        });

    }

    function productVariantsAjax() {
        var selector = $('.ps-btn'),
            shoe = $('.ps-shoe');
        shoe.on('mouseenter', function() {
            var variants = $(this).find('.ps-shoe__variant');
            if (variants.children().length === 0) {
                setTimeout(function() {
                    $.ajax({
                        url: "../js/shoe-variants.js",
                        success: function(data) {
                            var images = JSON.parse(data);
                            for (var i in images) {
                                $('<img src=' + images[i] + '>').appendTo(variants);
                            }
                            variants.owlCarousel({
                                margin: 20,
                                autoplay: false,
                                loop: false,
                                nav: true,
                                dots: false,
                                mouseDrag: true,
                                touchDrag: true,
                                navSpeed: 1000,
                                items: 4,
                                navText: ["<i class='ps-icon-back'></i>", "<i class='ps-icon-next'></i>"],
                                responsive: {
                                    0: {
                                        items: 3
                                    },
                                    480: {
                                        items: 3
                                    },
                                    768: {
                                        items: 3
                                    },
                                    992: {
                                        items: 4
                                    },
                                    1200: {
                                        items: 4
                                    }
                                }
                            });
                        }
                    });
                }, 0);

            }
            else {
                return false;
            }
        });
    }

    function productThumbnailChange() {
        var originImageData;
        $('.ps-shoe__variants').on('mouseenter', 'img', function() {
            var image = $(this).attr('src');
            var originImage = $(this).closest('.ps-shoe').find('.ps-shoe__thumbnail img');
            originImageData = originImage.attr('src');
            originImage.attr('src', image);
        });
    }

    function productVaritantsNormal() {
        var variants = $('.ps-shoe__variant.normal');
        variants.owlCarousel({
            margin: 20,
            autoplay: false,
            loop: false,
            nav: true,
            dots: false,
            mouseDrag: true,
            touchDrag: true,
            navSpeed: 1000,
            items: 4,
            navText: ["<i class='ps-icon-back'></i>", "<i class='ps-icon-next'></i>"],
            responsive: {
                0: {
                    items: 3
                },
                480: {
                    items: 3
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
    }

    function zoomAction() {
        $('.zoom').each(function() {
            if ($(this).parent().hasClass('slick-active')) {
                $(this).elevateZoom({
                    responsive: true,
                    zoomType: "inner",
                    zoomWindowWidth: 600,
                    zoomWindowHeight: 600
                });
            }
        });
    }

    function zoomInit() {
        var zoom = $('.ps-product__image .item').first().find('.zoom');
        var primary = $('.ps-product__image .item.slick-active').first().children('.zoom');
        primary.elevateZoom({
            responsive: true,
            zoomType: "inner",
            zoomWindowWidth: 600,
            zoomWindowHeight: 600
        });
    }

    function slickConfig() {
        var primary = $('.ps-product__image'),
            second = $('.ps-product__variants');
        primary.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.ps-product__variants',
            dots: false,
            arrows: false,

        });
        second.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            arrow: false,
            focusOnSelect: true,
            asNavFor: '.ps-product__image',
            vertical: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 4,
                        vertical: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        vertical: false
                    }
                },
            ]
        });
        primary.on('afterChange', function(event, slick, currentSlide) {
            zoomAction();
        });
        primary.on('beforeChange', function(event, slick, currentSlide) {
            $('.zoomContainer').remove();
        });
    }

    function bootstrapSelect() {
        $('.selectpicker').selectpicker({
            style: 'btn-primary',
            size: 4
        });
    }

    function magnificPopup() {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }

    function filterSlider() {
        var el = $('.ac-slider');
        var min = el.siblings().find('.ac-slider__min');
        var max = el.siblings().find('.ac-slider__max');
        var defaultMinValue = el.data('default-min');
        var defaultMaxValue = el.data('default-max');
        var maxValue = el.data('max');
        var step = el.data('step');

        if (el.length > 0) {
            el.slider({
                min: 0,
                max: maxValue,
                step: step,
                range: true,
                values: [defaultMinValue, defaultMaxValue],
                slide: function(event, ui) {
                    var $this = $(this),
                        values = ui.values;

                    min.text('$' + values[0]);
                    max.text('$' + values[1]);
                }
            });

            var values = el.slider("option", "values");
            min.text('$' + values[0]);
            max.text('$' + values[1]);
        }
        else {
            return false;
        }
    }

    function revolution() {
        if ($("#home-banner").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1059_1");
        }
        else {
            $("#home-banner").show().revolution({
                sliderType: "standard",
                jsFileLocation: "plugins/revolution/js/",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "on",
                    bullets: {
                        enable: true,
                        style: 'hermes',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,
                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 20,
                        space: 5,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    },
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                },
                responsiveLevels: [1440, 1170, 992, 768],
                visibilityLevels: [1440, 1170, 992, 768],
                gridWidth: [1440, 1170, 992, 768],
                gridheight: [750, 700, 650, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "60px",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }

    function stickyWidget() {
        // on scroll move the sidebar
        var widget = $('.ps-sticky.desktop');

        if (widget.length > 0 && $('.ps-sidebar').length > 0) {
            var sidebarEnd = $('.ps-sidebar').offset().top + $('.ps-sidebar').height();
            var stickyHeight = widget.height(),
                sidebarTop = widget.offset().top;
        }
        $(window).scroll(function() {
            if (widget.length > 0) {
                var scrollTop = $(window).scrollTop();
                if (sidebarTop < scrollTop) {
                    widget.css('top', scrollTop - sidebarTop + 100);
                    if (scrollTop >= sidebarEnd) {
                        widget.css('top', sidebarEnd - sidebarTop - 120);
                    }
                }

                else {
                    widget.css('top', '0');
                }
            }
        });
    }

    $(document).ready(function() {
        backgroundImage();
        parallax();
        rating();
        menuBtnToggle();
        subMenuToggle();
        owlCarousel($('.owl-slider'));
        // initMap();
        // setHeightProduct();
        navigateOwlCarousel();
        countDown();
        masonry();
        stickyHeader();
        productVariantsAjax();
        productThumbnailChange();
        bootstrapSelect();
        slickConfig();
        zoomInit();
        magnificPopup();
        productVaritantsNormal();
        // stickyWidget();
        revolution();
        filterSlider();
    });

    $(window).on('load', function() {
        $('.ps-loading').addClass('loaded');
    });

    $(window).on('load resize', function() {
        resizeHeader()
    });
  $(".show_hide_password .show-pass").on('click', function() {
    let input = $(this).siblings("input");
    if (input.attr("type") === "password") {
      input.attr("type", "text");
      $(this).find("i").removeClass("fa-eye-slash").addClass("fa-eye");
    } else {
      input.attr("type", "password");
      $(this).find("i").removeClass("fa-eye").addClass("fa-eye-slash");
    }
  });

// Notifications
        function successNotification(title) {
            $.notify(
                {
                    title: ` <strong>${title}</strong>`,
                    message: "",
                    icon: "fas fa-check-circle",
                },
                {
                    // settings
                    element: "body",
                    position: null,
                    type: "success",
                    allow_dismiss: true,
                    newest_on_top: false,
                    showProgressbar: false,
                    placement: {
                        from: "top",
                        align: "right",
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    timer: 1000,
                    url_target: "_blank",
                    mouse_over: null,
                    animate: {
                        enter: "animated fadeInDown",
                        exit: "animated fadeOutUp",
                    },
                    onShow: null,
                    onShown: null,
                    onClose: null,
                    onClosed: null,
                    icon_type: "class",
                }
            );
        }

        function dangerNotification(title) {
            $.notify(
                {
                    // options
                    title: ` <strong>${title}</strong>`,
                    message: "",
                    icon: "fas fa-exclamation-triangle",
                },
                {
                    // settings
                    element: "body",
                    position: null,
                    type: "danger",
                    allow_dismiss: true,
                    newest_on_top: false,
                    showProgressbar: false,
                    placement: {
                        from: "top",
                        align: "right",
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    timer: 1000,
                    url_target: "_blank",
                    mouse_over: null,
                    animate: {
                        enter: "animated fadeInDown",
                        exit: "animated fadeOutUp",
                    },
                    onShow: null,
                    onShown: null,
                    onClose: null,
                    onClosed: null,
                    icon_type: "class",
                }
            );
        }
        // Notifications Ends

  // -------------------------------------------------------------
    // ecommerce custom js
  // -------------------------------------------------------------  
$(document).on("click", "#add_to_cart", function () {
    getData(1);
});
$(document).on("click", "#buy_to_cart", function () {
    getData(1, $(this).attr("data-item"), 0, 0, 1);
});

function getData( status = 0, check = 0, item_key = 0, qty = 0, add_type = 0, optionIds = null ) {
    
    let itemId;
    let type;
    
    if (check != 0) {
        itemId = check;
        type = 1;
    } else {
        itemId = $("#item_id").val();
        type = 0;
    }

    let options_prices = optionPrice();

    let totalOptionPrice = parseFloat(optionPriceSum(options_prices));

    let attribute_ids = $(".attribute_option :selected")
        .map(function (i, el) {
            return $(el).attr("data-type");
        })
        .get();

    if (optionIds != null) {
        var options_ids = optionIds;
    } else {
        var options_ids = $(".attribute_option :selected")
            .map(function (i, el) {
                return $(el).attr("data-href");
            })
            .get();
    }

    let quantity;

    quantity = parseInt(getQuantity());

    if (isNaN(quantity)) {
        quantity = 1;
    }
    if (qty != 0) {
        quantity = qty;
    }

    let setCurrency = $("#set_currency").val();

    let currency_direction = $("#currency_direction").val();

    let demoPrice = parseFloat($("#demo_price").val());
    let subPrice = parseFloat(demoPrice + totalOptionPrice);
    let mainPrice = subPrice * quantity;

    mainPrice = 200;
    
    if (currency_direction == 0) {
        $("#main_price").html(mainPrice + setCurrency);
    } else {
        $("#main_price").html(setCurrency + mainPrice);
    }
    // get variants 
    let size = $('[name="size"]:checked').val();
    let color = $('[name="color"]:checked').val();
    
    if (status == 1) {
        let mainurl = window.location.origin;
        let addToCartUrl = `${mainurl}/product/add/cart?item_id=${itemId}&options_ids=${options_ids}&attribute_ids=${attribute_ids}&quantity=${quantity}&type=${type}&item_key=${item_key}&add_type=${add_type}&size=${size}&color=${color}`;
       
        $.ajax({
            type: "GET",
            url: addToCartUrl,
            success: function (data) {
                if (data.status == "outStock") {
                    dangerNotification(data.message);
                } else if (data.status == "alreadyInCart") {
                    dangerNotification(data.message);
                    $(".cart_count").text(data.qty);
                    $(".cart-dropdown").addClass("active");
                    $('.dropdown-cart-items').html(data.cart_items_html);
                } else {
                   $(".cart_count").text(data.qty);
                    $(".cart-dropdown").addClass("active");
                    $('.dropdown-cart-items').html(data.cart_items_html);
                    if (qty) {
                        $("#view_cart_load").load(
                            $("#cart_view_load").attr("data-target")
                        );
                    }
                    if (add_type == 1) {
                        location.href = "/checkout/review/payment";
                    } else {
                        successNotification(data.message);
                    }
                }
            },
        });
    }
    }



    function optionPrice() {
        let option_prices = $(".attribute_option :selected")
            .map(function (i, el) {
                return $(el).attr("data-target");
            })
            .get();

        return option_prices;
    }

    function getQuantity() {
        let quantity = $(".qtyValue").val();
        return parseInt(quantity);
    }

    function optionPriceSum(options_prices) {
        var price = 0;
        $.each(options_prices, function (i, v) {
            price += parseFloat(v);
        });
        return price;
    }

    // cart item remove
    function handleRemoveCartItem(item_id) {
        let mainurl = window.location.origin;
        let removeCartUrl = `${mainurl}/cart/destroy/${item_id}`;
        $.ajax({
            type: "GET",
            url: removeCartUrl,
            success: function (data) {
                if (data.status == "success") {
                    successNotification(data.message);
                    $(".cart_count").text(data.qty);
                    $(".cart-dropdown").addClass("active");
                    $('.dropdown-cart-items').html(data.cart_items_html);
                  
                } else {
                    dangerNotification(data.message);
                }
            },
        });
    }
    $(document).on("click", ".cart-item-remove", function () {
        const itemId = $(this).data("cart-id");
        handleRemoveCartItem(itemId);
    });

  
})(jQuery);

//# sourceMappingURL=main.js.map