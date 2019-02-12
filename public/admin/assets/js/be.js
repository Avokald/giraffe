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

    $("body").on("change", ".ajax-image-upload", function () {
        var it = $(this);
        if (this.files && this.files[0]) {
            console.log('sending');
            console.log(this.files);
            var data = new FormData();
            data.append('image', this.files[0]);
            $.ajax({
                method: 'POST',
                url: ajax_image_upload_url,
                data: data,
                success: function (response) {
                    it.siblings(".ajax-image-id").val(response);
                },
                cache: false,
                contentType: false,
                processData: false,
            });
        }
    });

});