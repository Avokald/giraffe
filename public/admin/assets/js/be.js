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

        var clone = $(".block-saver > ." + $(this).attr('data-block-type')).clone();
        let counter = $(this).attr('data-counter');

        clone.html((i, html) => {
            return html.replace('<js-counter>', counter);
        });

        // var editor_id = uuidv4();
        clone.html((i, html) => {
            return html.replace('<js-counter>', counter);
        });

        $(this).attr('data-counter', ++counter);
        $(this).closest(".repeater").find(".repeater-list").append(clone);

        // var editor = document.getElementById(clone.find('textarea').attr('id'));
        //
        // ClassicEditor
        //     .create(editor)
        //     .catch( error => {
        //         console.error( error );
        // });

    });

    $("body").on("click", ".repeater-delete-el", function(event) {
        event.preventDefault();

        $(this).closest(".repeater-item").remove();
    });

    $("body").on("click", ".ajax-image-delete", function(event) {
        event.preventDefault();

        $(this).closest(".repeater-item").remove();
        var data = new FormData();
        data.append('image_id', $(this).attr("data-image-id"));
        data.append('_method', 'delete');
        console.log('sending');
        $.ajax({
            method: 'POST',
            url: ajax_image_delete_url,
            data: data,
            success: function (response) {
                alert('Удалено');
            },
            cache: false,
            contentType: false,
            processData: false,
        })
    });

    $("body").on("change", ".ajax-image-upload", function () {
        var it = $(this);
        if (this.files && this.files[0]) {
            var data = new FormData();
            data.append('image', this.files[0]);
            $.ajax({
                method: 'POST',
                url: ajax_image_upload_url,
                data: data,
                success: function (response) {
                    alert('Загружено');
                    it.siblings(".ajax-image-id").val(response['id']);
                },
                cache: false,
                contentType: false,
                processData: false,
            });
        }
    });
});