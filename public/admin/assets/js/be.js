jQuery(function() {
    $(".confirm-delete").click(function() {
        $.confirm({

            backgroundDismiss: true,
            title: 'Sure?',
            buttons: {
                confirm: function() {
                    $.alert('deleted');
                    //$(this).submit(); TODO Check delete handler
                },
                cancel: {
                    btnClass: 'btn-blue',
                    keys: ['enter',],
                },


            }
        })
    });

    $("body").on("click", ".repeater-add-el", function(event) {
        event.preventDefault();

        var clone = $(".block-saver > ." + $(this).data('block-type')).clone();

        $(this).closest(".repeater").find(".repeater-list").append(clone);
    });

    $("body").on("click", ".repeater-delete-el", function(event) {
        event.preventDefault();

        $(this).closest(".repeater-item").remove();
    });

});