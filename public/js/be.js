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