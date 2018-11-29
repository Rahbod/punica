var animationRunning= false;
$(function () {
    var gap = 0;
    if($(window).width() <= 768)
        gap = 60;

    var body = $("body");
    var url = window.location.hash, idx = url.indexOf("#");
    var hash = idx !== -1 ? url.substring(idx) : -1;
    if(hash !== -1){
        $('html, body').animate({
            scrollTop: ($(hash).offset().top - gap)
        },0);
        $("section.active").removeClass("active");
        $(hash).addClass("active");
    }

    var vw = $(window).width(),
        vh = $(window).height();
    $(window).resize(function () {
        var nw = $(window).width(),
            nh = $(window).height();

        if($(window).width() <= 768)
            gap = 60;
        else
            gap = 0;
        if($(window).width() <= 768)
            return;
        var url = window.location.hash, idx = url.indexOf("#");
        var hash = idx !== -1 ? url.substring(idx) : -1;
        if(hash !== -1){
            $('html, body').animate({
                scrollTop: ($(hash).offset().top - gap)
            },0);
            $("section.active").removeClass("active");
            $(hash).addClass("active");
        }

        vw = nw;
        vh = nh;
    });

    let shownItem;
    body.on('click', '.navbar li a, .ease-link', function (e) {
        e.preventDefault();
        var href = $(this).attr('href'),
            el = $(href);
        if (href.substr(1, href.length))
            $('html, body').animate({
                scrollTop: (el.offset().top - gap)
            }, 1000,function () {
                $("section.active").removeClass("active");
                el.addClass("active");
                animationRunning= false;
                history.replaceState(null, null, ('#'+el.attr('id')));
            });
    }).on('click', '.owl-carousel .next, .owl-carousel .prev', function (e) {
        e.preventDefault();
        let nextEl,
            wrap = $(this).parents(".owl-carousel"),
            element = wrap.data("element"),
            stagePosition = wrap.data("stagePosition"),
            size = wrap.data("itemSize");
        // next btn
        if ($(this).hasClass('next')) {
            if(wrap.find(element + ".active").next(element).length) {
                stagePosition -= size;
                nextEl = wrap.find(element + ".active").next(element);
                wrap.find(element + ".active").removeClass("active");
                nextEl.addClass("active");
                wrap.find(".prev").removeClass("disable");
            }
            if(!nextEl.next(element).length)
                wrap.find(".next").addClass("disable");
        }

        // prev btn
        if ($(this).hasClass('prev')) {
            if(wrap.find(element + ".active").prev(element).length) {
                stagePosition += size;
                nextEl = wrap.find(element + ".active").prev(element);
                wrap.find(element + ".active").removeClass("active");
                nextEl.addClass("active");
                wrap.find(".next").removeClass("disable");
            }
            if(!nextEl.prev(element).length)
                wrap.find(".prev").addClass("disable");
        }
        wrap.data("stagePosition", stagePosition)
            .find(".owl-stage").css({"-webkit-transform": "translateX(" + (stagePosition) + "px)"});
    }).on("click", ".stone-item > a", function (e) {
        e.preventDefault();

        let src = $(this).find("img").data('src'),
            details = $(this).find(".detail").html(),
            modal = $("#show-stone-modal");

        if(src === undefined)
            src = $(this).find("img").attr('src');

        modal
            .data("gallery-id", "#"+$(this).parents(".item-carousel").attr("id"))
            .data("index", $(this).parents(".stone-item").index());

        // modal.find(".image-box").fadeOut(100, function() {
        //     modal.find("img").attr('src', src);
        //     modal.find(".detail-box").html(details);
        // }).fadeIn(100);

        modal.find("img").attr('src', src);
        modal.find(".detail-box").html(details);

        // disable buttons
        if($(this).parents(".stone-item").index() !== $(this).parents(".item-carousel").find('.stone-item').length-1)
            modal.find(".next").removeClass("disable");
        else
            modal.find(".next").addClass("disable");
        if($(this).parents(".stone-item").index()>0)
            modal.find(".prev").removeClass("disable");
        else
            modal.find(".prev").addClass("disable");

        $('body, html').addClass("overflow-fix");
        modal.modal("show");
    }).on("click", "#show-stone-modal .next, #show-stone-modal .prev", function (e) {
        e.preventDefault();

        let gallery = $($(this).parents(".modal").data('gallery-id')),
            index = $(this).parents(".modal").data('index');

        console.log(gallery);

        // next btn
        if ($(this).hasClass('next')) {
            if(gallery.find(".owl-stage .stone-item").eq(index+1).length) {
                gallery.find(".owl-stage .stone-item").eq(index+1).find('a').trigger('click');
                $("#show-stone-modal").find(".prev").removeClass("disable");
            }
            if(!gallery.find(".owl-stage .stone-item").eq(index+2).length)
                $("#show-stone-modal").find(".next").addClass("disable");
        }

        // prev btn
        if ($(this).hasClass('prev')) {
            if(gallery.find(".owl-stage .stone-item").eq(index-1).length) {
                gallery.find(".owl-stage .stone-item").eq(index-1).find('a').trigger('click');
                $("#show-stone-modal").find(".next").removeClass("disable");
            }
            if(!gallery.find(".owl-stage .stone-item").eq(index-2).length)
                $("#show-stone-modal").find(".prev").addClass("disable");
        }
    }).on("click", '.menu-trigger', function (e) {
        e.preventDefault();
        let body = $("body"),
            html = $("html"),
            btn = $(this),
            menu = btn.parent().next("ul");
        if(btn.hasClass("open")) {
            menu.removeClass("open");
            btn.removeClass("open");
            // body.removeClass("overflow-fix");
            // html.removeClass("overflow-fix");
            // if (!body.hasClass("no-wheel") && $(window).width() > 768){
            //     $(window).bind('scroll');
            //     window.addEventListener('wheel', wheelListener);
            // }
        }else{
            // body.addClass("overflow-fix");
            // html.addClass("overflow-fix");
            // if (!body.hasClass("no-wheel") && $(window).width() > 768){
            //     $(window).unbind('scroll');
            //     window.removeEventListener('wheel', wheelListener);
            // }
            menu.addClass("open");
            btn.addClass("open");
        }
    }).on("click", '.nav-trigger', function (e) {
        e.preventDefault();
        let body = $("body"),
            html = $("html"),
            btn = $(this),
            header = btn.parent(),
            menu = header.find("ul");
        if(header.hasClass("open")) {
            body.removeClass("overflow-fix");
            html.removeClass("overflow-fix");
            // if (!body.hasClass("no-wheel") && $(window).width() > 768){
            //     $(window).bind('scroll');
            //     window.addEventListener('wheel', wheelListener);
            // }
        }else{
            body.addClass("overflow-fix");
            html.addClass("overflow-fix");
            // if (!body.hasClass("no-wheel") && $(window).width() > 768){
            //     $(window).unbind('scroll');
            //     window.removeEventListener('wheel', wheelListener);
            // }
        }
        header.toggleClass("open");
    }).on("click", '.header .nav li', function (e) {
        $(".nav-trigger").trigger('click');
    }).on("click", '.navigation .nav.open a', function (e) {
        e.preventDefault();
        let btn = $(this).parents('.navigation').find(".menu-trigger");
        btn.trigger('click');
    });

    $(".item-carousel:not(.item-list)").each(function () {
        carouselInit($(this));
    });

    $("#show-stone-modal").on("hide.bs.modal", function () {
        $('body, html').removeClass("overflow-fix");
    });

    $(document).on('scroll',function(e){
        $('section').each(function() {
            if (($(this).offset().top - gap) < window.pageYOffset
                && ($(this).offset().top - gap) + $(this).height() > window.pageYOffset
            ) {
                history.replaceState(null, null, ('#'+$(this).attr('id')));
                // window.location.hash = $(this).attr('id');
            }
        });
    });
});

function carouselInit(carousel){
    let itemSize=0, margin=30, totalSize, element = ".stone-item";
    itemSize = carousel.find(element).width()+ margin;
    totalSize = itemSize * carousel.find(element).length;
    carousel.data('totalSize', totalSize).data('stagePosition', ($(window).width()>768?60:30)).data('itemSize', itemSize).data('element', element)
        .find(".owl-stage").css({width: totalSize});
}