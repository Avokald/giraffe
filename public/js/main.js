! function() {
    "use strict";
    var e = $(window).width();
    $(window).height();

    function i(e, i, t) {
        $(e).on("click", function() {
            t.trigger("next.owl.carousel")
        }), $(i).on("click", function() {
            t.trigger("prev.owl.carousel")
        })
    }

    function t(i, t) {
        var e = $(i + " > a");
        e.append('<span class="icon-plus"></span>'), e.find("span").on("click", function(e) {
            e.preventDefault(), $(this).parents(i).find(t).slideToggle().parents(i).siblings().find(t).slideUp()
        })
    }
    e < 991 && (t(".has_dropdown", ".dropdown"), t(".has_megamenu", ".dropdown_megamenu")), $(".search_trigger").on("click", function() {
        $(this).toggleClass("icon-magnifier icon-close"), $(this).parent(".search_module").children(".search_area").toggleClass("active")
    }), $(".close_menu").on("click", function() {
        $(this).parent(".offcanvas-menu").addClass("closed")
    }), $(".menu_icon").on("click", function() {
        $(this).siblings(".offcanvas-menu").removeClass("closed")
    }), $(".filter__menu_icon").on("click", function() {
        $(".filter_dropdown").toggleClass("active")
    });
    var s = $(".go_top");
    $(window).on("scroll", function() {
        117 < $(document).scrollTop() ? s.fadeIn(400) : s.fadeOut(400)
    }), s.on("click", function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 800), !1
    }), $(".bg_image_holder").each(function() {
        var e = $(this),
            i = e.children().attr("src");
        e.css({
            "background-image": "url(" + i + ")",
            opacity: "1"
        }).children().attr("alt", i)
    }), $(".count_up").counterUp({
        delay: 10,
        time: 1e3
    });
    var o = $(".price-ranges .from"),
        n = $(".price-ranges .to");
    var sMin = +$('.price-range').data('min');
    var sMax = +$('.price-range').data('max');
    var sMinVal = +$('.price-range').data('valmin');
    var sMaxVal = +$('.price-range').data('valmax');
    var currensy = $('.price-range').data('currency');
    console.log(sMax)
    console.log(sMin)
    console.log(sMinVal)
    console.log(sMaxVal)
    console.log(currensy)

    $(".price-range").slider({
        range: !0,
        min: sMin,
        max: sMax,
        values: [sMinVal, sMaxVal],
        slide: function(e, i) {
            o.text(i.values[0]+ " " +currensy), n.text(i.values[1]+ " " +currensy);
            o.attr('data-filter-value', i.values[0]);
            n.attr('data-filter-value', i.values[1]);
        }
    }), $.prototype.venobox && $(".venobox").venobox(), $(".prod_option .setting-icon").on("click", function() {
        $(this).siblings(".options").toggle()
    });
    var a = $(".reply-comment"),
        r = $(".reply-link");
    a.hide(), r.on("click", function(e) {
        e.preventDefault(), $(this).parents(".media").siblings(".reply-comment").show().find("textarea").focus()
    }), $(".countdown").countdown("2021/6/18", function(e) {
        $(this).html(e.strftime("<li>%D <span>days</span></li>  <li>%H <span>hours</span></li>  <li>%M <span>minutes</span></li>  <li>%S <span>seconeds</span></li> "))
    });
    var l = $(".single_acco_title a");
    l.on("click", function() {
        l.not(this).removeClass("active").find(".lnr").not($(this).find(".lnr")).removeClass("icon-arrow-down-circle").addClass("icon-arrow-right-circle"), $(this).toggleClass("active").find(".lnr").toggleClass("icon-arrow-right-circle icon-arrow-down-circle")
    }), $(".dattaPikkara").datepicker();
    var c = $(".card--pricing2 .pricing-options li p"),
        d = $(".card--pricing2 .price h1 span");
    c.slideUp(), $(".card--pricing2 .custom-radio label").on("click", function() {
        var e = $(this);
        c.slideUp(200), e.parents("li").find("p").slideDown(200), d.text(e.data("price") + ".00")
    }), $(".tab-content-wrapper").length ? $("#product-details").children().children().last().css({
        "margin-bottom": 0,
        "padding-bottom": 0
    }) : $("#product-details").children().last().css({
        "margin-bottom": 0,
        "padding-bottom": 0
    });
    var p = $(".amounts ul li");
    p.on("click", function() {
        $(this).find("p").addClass("selected"), $(this).siblings(p).find("p").removeClass("selected"), $(".selected_price").val($(this).data("price"))
    }), $(".attachment_field").on("change", function(e) {
        for (var i = e.target.files, t = $(".attached"), s = 0; i.length > s; s++) t.append("<p>" + i[s].name + '<span class="icon-close"></span></p>')
    }), $(".actions span.fa").on("click", function() {
        $(this).toggleClass("fa-star-o fa-star")
    }), $(".attached").on("click", "p>span", function() {
        $(this).parent().remove()
    }), $(".user--following .btn").on("mouseenter", function() {
        $(this).text("unfollow")
    }).on("mouseleave", function() {
        $(this).text("following")
    }), $(".give_rating").barrating({
        theme: "fontawesome-stars"
    });
    var u = $(".prod-slider1");
    u.owlCarousel({
        items: 1,
        autoplay: !1
    }), i(".product__slider-nav .nav_right", ".product__slider-nav .nav_left", u);
    var m = $(".prod-slider2");
    m.owlCarousel({
        items: 1,
        autoplay: !1
    }), i(".prod_slide_prev", ".prod_slide_next", m), $(".testimonial-slider").owlCarousel({
        items: 1,
        dots: !1,
        nav: !0,
        navText: ["<i class='icon-arrow-left'></i>", "<i class='icon-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: !1
            },
            480: {
                items: 1,
                nav: !1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    }), $(".sponsores").owlCarousel({
        items: 4,
        autoplay: !0,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });
    var g = $(".product_slider");
    g.owlCarousel({
        items: 3,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    }), i(".follow_feed_nav .nav_right", ".follow_feed_nav .nav_left", g), $(".partners").owlCarousel({
        items: 5,
        autoplay: !0,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 5
            }
        }
    }), $(".item__preview-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        fade: !0,
        asNavFor: ".thumb-slider"
    });
    var f, v, h, w = $(".thumb-slider");
    w.slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: !1,
        focusOnSelect: !1,
        asNavFor: ".item__preview-slider",
        responsive: [{
            breakpoint: 479,
            settings: {
                slidesToShow: 3
            }
        }]
    }), f = w, v = $(".thumb-nav .nav-left"), h = $(".thumb-nav .nav-right"), v.on("click", function() {
        f.slick("slickNext")
    }), h.on("click", function() {
        f.slick("slickPrev")
    }), $(".dropdown-trigger").on("click", function(e) {
        e.preventDefault();
        var i = $(this).siblings(".dropdown");
        i.toggleClass("active"), $(".dropdown").not(i).removeClass("active")
    }), $("#trumbowyg-demo").length && $("#trumbowyg-demo").trumbowyg(), $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    }), $("img.svg").each(function() {
        var t = $(this),
            s = t.attr("id"),
            o = t.attr("class"),
            e = t.attr("src");
        $.get(e, function(e) {
            var i = jQuery(e).find("svg");
            void 0 !== s && (i = i.attr("id", s)), void 0 !== o && (i = i.attr("class", o + " replaced-svg")), i = i.removeAttr("xmlns:a"), t.replaceWith(i)
        }, "xml")
    }), $(".product-slide-area").owlCarousel({
        items: 3,
        margin: 30,
        dots: !1,
        nav: !0,
        navText: ["<i class='icon-arrow-left'></i>", "<i class='icon-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            }
        }
    }), $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !0,
        prevArrow: "<span class='slick-prev'><i class='icon-arrow-left'></i></span>",
        nextArrow: "<span class='slick-next'><i class='icon-arrow-right'></i></span>",
        fade: !0,
        asNavFor: ".slider-nav"
    }), $(".slider-nav").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: !1,
        centerMode: !0,
        focusOnSelect: !0,
        variableWidth: !1,
        arrows: !1,
        centerPadding: 15,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }]
    }), $("body").find('[data-toggle="modal"]').on("click", function() {
        var e = $(this).data("target"),
            i = $(this).attr("data-theVideo"),
            t = i + "?autoplay=1";
        $(e + " iframe").attr("src", t), $(e + " button.close").on("click", function() {
            $(e + " iframe").attr("src", i)
        })
    }), $(".select2_default").select2({
        placeholder: "Multiple Select",
        width: "100%",
        containerCssClass: "form-control"
    }), $(".select2_tagged").select2({
        multiple: !0,
        placeholder: "Select options",
        containerCssClass: "form-control"
    }), $(".custom_checkbox .slider").on("click", function() {
        var e = $(this).parents(".custom_checkbox").children(".check-confirm");
        e.text() === e.data("text-swap") ? e.text(e.data("text-original")) : e.text(e.data("text-swap"))
    }), $(".menu-toggler").on("click", function() {
        $(".dashboard_menu").toggleClass("active")
    })
}();