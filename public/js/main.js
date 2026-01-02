let visible = '<div class="overflow_element" onclick="closeCategory()"></div>';
    menuBtn = '<div class="menu_small"><span></span><span></span><span></span></div>',
    menuWrap = '<div class="mobile_wrap"><div class="m_block"></div></div>';
    visibled = '<div class="visited" onclick="closeMenu()"></div>';
var topTo = $('#gotoTop');

mobileMenu = function () {
    if ($(window).innerWidth() < 1121) {
        if ($('.logo_container .menu_small').length === 0) {
            $('.logo_container .em_logo').before(menuBtn);
            if ($('.mobile_wrap').length === 0) {
                $('body').prepend(menuWrap);
            }
            $('.header_content > ul').appendTo('.mobile_wrap .m_block');
        }
        closeMenu();
    } else {
        $('.mobile_wrap .m_block > ul').appendTo('.header_content');
        $('.menu_small, .mobile_wrap').remove();
        $('html').removeClass('visible_page');
        $('body').removeClass('visibled');
    }
}

closeMenu = function(){
    $('.visited').remove();
    $('html').removeClass('visible_page');
    $('body').removeClass('visibled');
    $('.menu_small, .mobile_wrap').removeClass('open');
}

sliderHeight = function(){
    let bW = $('.slide_item').width();
    if($(window).innerWidth < 768){
        biw = ((bW * 3.554045)/10)
        $('#sps').css({height: biw});
    } else {
        $('#sps').css({height: '400'});
    }
}

closeCategory = function(){
    $('html').removeClass('visible');
    $('.overflow_element').remove();
    $('.cat_menu_wrap, .link_search_wrap, .link_example_list').removeClass('open');
}

dialogShow = function(){
    $('.sbemt_dialog').show();
}

dialogHide = function(){
    $('.sbemt_dialog').hide();
}

filterShow = function(){
    $('html').addClass('visible');
    $('.filter_wrap').addClass('show');
}
orderShow = function(){
    $('html').addClass('visible');
    $('.order_wrap').addClass('show');
}

closeFilter = function(){
    $('html').removeClass('visible');
    $('.filter_wrap, .order_wrap').removeClass('show');
}

headerFixed = function(){
    if(window.scrollY > 34) {
        $('body').addClass('fixed');
        topTo.addClass('show');
    } else {
        $('body').removeClass('fixed');
        topTo.removeClass('show');
    }
}

menuScroll = function(){
    // $("a.page-scroll").first().addClass("selected");
    $('a.page-scroll[href*="#"]:not([href="#"])').on("click", function (event) {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        event.preventDefault();
        $("a.page-scroll").removeClass("selected");
            var target = $(this.hash);
            if (target.length) {
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                if ($(window).innerWidth() < 640) {
                    $("html, body").animate(
                    {
                        scrollTop: target.offset().top,
                    },
                    100
                    );
                    return false;
                } else {
                    $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 57,
                    },
                    100
                    );
                    return false;
                }
            }
        }
    });
}

$(window).resize(function(){
    mobileMenu();
    closeMenu();
    sliderHeight();
});

$(window).scroll(function(){
    headerFixed();
    menuScroll();
});

$(document).ready(function(){
    mobileMenu();
    closeMenu();
    menuScroll();
    headerFixed();

    $(document).on('click', '.menu_small', function(e){
        let mwrap = $('.mobile_wrap');
        e.preventDefault();
        $('html').toggleClass('visible_page');
        $(this).toggleClass('open');
        $('.__header_main').toggleClass('open');
        $(mwrap).toggleClass('open');
        if($('body').find('.visited').length === 0) {
            $(visibled).appendTo('body');
        } else {
            $('.visited').remove();
        }
    });

    var sUrl = $('.page-scroll');
    $(window).scroll(function () {
        sUrl.each(function () {
            var target = $(this.hash);
                if(target.length >= 1) {
                if (target.offset().top - 146 <= scbl) {
                    $(this).parent().siblings().removeClass('selected');
                    $(this).parent().addClass('selected');
                }
            }
        });
    });


    const $header = $('.header_slider');

    $(window).on('scroll', function () {
        const scrollTop = $(this).scrollTop();
        const headerHeight = $header.outerHeight(); // ≈ 100vh

        if (scrollTop > headerHeight - 16) {
            $('body').addClass('is-scrolled');
        } else {
            $('body').removeClass('is-scrolled');
        }
    });

    let isPaused = false;
    const marquees = [];

    $('.marquee-row').each(function () {

        const $row = $(this);
        const $track = $row.find('.marquee-track');

        const rowWidth = $row.width();
        const trackWidth = $track.outerWidth();

        const speed = parseFloat($row.data('speed')) || 0.5;
        // direction
        let direction = $row.data('direction') === 'right' ? 1 : -1;

        // 🔥 START POSITION (энд л шийдэгдэнэ)
        let position = direction === -1
        ? 0                           // left → баруун захаас
        : rowWidth - trackWidth;      // right → зүүн захаас

        function animate() {
            if (!isPaused) {
          
              position += speed * direction;
          
              // зүүн зах
              if (position <= rowWidth - trackWidth) {
                position = rowWidth - trackWidth;
                direction *= -1;
              }
          
              // баруун зах
              if (position >= 0) {
                position = 0;
                direction *= -1;
              }
          
              $track.css('transform', `translateX(${position}px)`);
            }
          
            requestAnimationFrame(animate);
        }

        animate();
        marquees.push({ $row, $track });
    });

    // Pause / Play button
    $('#marquee-toggle').on('click', function () {
        const state = $(this).data('state');

        if (state === 'playing') {
        isPaused = true;
        $(this).data('state', 'paused').text('▶ Явуулах');
        } else {
        isPaused = false;
        $(this).data('state', 'playing').text('⏸ Зогсоох');
        }
    });

    $(topTo).on('click', function() {
        $('html').animate({scrollTop: 0}, 300)
        return false;
    });
    
    $(document).on('click', '.link_search_btn', function(e){
        e.preventDefault();
        if($('body').find('.overflow_element').length === 0){
            $('body').prepend(visible);
        }
        $('.link_search_wrap').addClass('open');
    });

    $(document).on('click', '#showSiteList', function(e){
        e.preventDefault();
        $('.link_search_wrap').removeClass('open');
        setTimeout(function(){
            $('.link_example_list').addClass('open');
        }, 400);
    });

    $('.collapse_item h3').on('click', function(){
        $(this).parent().toggleClass('open')
        $(this).next().slideToggle(200);
    });

    $('.select_btn').on('click', function(){
        $('.notification_list').toggleClass('remove');
    });
    $('.action_btn').on('click', function(){
        $('.list_item').toggleClass('action');
    });

    $('.sbemt_item>h3').click(function(e) {
        e.preventDefault();
        let $this = $(this);
        $this.parent().toggleClass('hidden');
        $this.next().slideToggle(300);
    });

    $('.order_btn').click(function(){
        $(this).toggleClass('select');
    });

    $('.cat_list_btn').on('click', function(){
        $(this).toggleClass('active');
        $(this).next().toggleClass('open');
    });

    $('.reg_text').on('click', function(){
        $('.register_words').removeClass('show');
        $(this).next().toggleClass('show');
    });

    $('.reg_words_grid > div').on('click', function(){
        console.log('aaa');
        $('.register_words').removeClass('show');
    });

    $('.thumbnail_big').on('click', function(){
        $('.zoom_wrap').addClass('show');
    });

    $('.zoom_close').on('click', function(){
        $('.zoom_wrap').removeClass('show');
    });

    var pnHeight = $('.popular_news').height();
    $('.other_news ul').css({
        height: pnHeight
    })

    sliderHeight();

    function updSwiperNumericPagination() {
        this.el.querySelector(".swiper-counter").innerHTML =
        '<span class="count">' +
        (this.realIndex + 1) +
        '</span>/<span class="total">' +
        this.el.slidesQuantity +
        "</span>";
    }

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".swiper-container").forEach(function (node) {
            node.slidesQuantity = node.querySelectorAll(".swiper-slide").length;
            new Swiper(node, {
                speed: 1000,
                loop: true,
                autoplay: { delay: 1000 },
                pagination: { el: node.querySelector(".swiper-pagination") },
                on: {
                    init: updSwiperNumericPagination,
                    slideChange: updSwiperNumericPagination
                }
            });
        });
    });
});
