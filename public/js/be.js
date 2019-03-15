jQuery(function() {
    $(".filter-services-element").bind("click", function (e) {
        e.preventDefault();
        filter_parameters[$(this).attr('data-filter-name')] = $(this).attr('data-filter-value');
    });
    $('input[name="filter_opt"]').change(function(){
        var val = $(this).val();
        $('.piz').html(val);
    });
    $('.mans').stick_in_parent();
    $('.item-navigation').stick_in_parent();
    $(window).scroll(function(){
        var scrollPos = $(document).scrollTop();
        $('.item-navigation a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.outerHeight() > scrollPos) {
                $('.item-navigation a').removeClass("active");
                $(this).addClass("active");
            }
            else{
                $(this).removeClass("active");
            }
        });
    });
    $('.item-navigation a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('.item-navigation a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });


    $(".filter-services-submit").on("click", function (e) {
        var result_url = location.protocol + '//' + location.host + location.pathname + "?";

        $(".filter-services-element").each(function (e) {
            if ($(this).attr('data-filter-name') == "max" || $(this).attr('data-filter-name') == "min") {
                filter_parameters[$(this).attr('data-filter-name')] = $(this).attr('data-filter-value');
            }
        })
        result_url += 'category_id=' + (filter_parameters['category'] || '');
        result_url += '&field_name=' + (filter_parameters['sorting'] || '');
        result_url += '&price_min=' +  (filter_parameters['min'] || '');
        result_url += '&price_max=' +  (filter_parameters['max'] || '');

        window.location.href = result_url;
    })
});