jQuery(function() {
    $(".filter-services-element").bind("click", function (e) {
        e.preventDefault();
        filter_parameters[$(this).attr('data-filter-name')] = $(this).attr('data-filter-value');
        console.log(filter_parameters);
    });

    $(".filter-services-submit").on("click", function (e) {
        var result_url = location.protocol + '//' + location.host + location.pathname + "?";

        result_url += 'category_id=' + (filter_parameters['category'] || '');
        result_url += '&field_name=' + (filter_parameters['sorting'] || '');
        result_url += '&min=' + (filter_parameters['min'] || '');
        result_url += '&max=' + (filter_parameters['max'] || '');

        window.location.href = result_url;
    })
});