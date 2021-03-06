jQuery(function() {
    $(".confirm-delete").click(function(e) {
        e.preventDefault();
        var it = $(this);
        $.confirm({
            backgroundDismiss: true,
            title: 'Вы уверены?',
            buttons: {
                confirm: function() {
                    $('#'+ it.attr('form')).submit(); //TODO Check delete handler
                    $.alert('Удалено');
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


        clone.html(clone.html().replace(/\<js-counter\>/g, counter));

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
                    console.log(response);
                    alert('Загружено');
                    it.siblings(".ajax-image-id").val(response['id']);
                    it.siblings(".ajax-image-preview").attr('src', response['url']);
                },
                cache: false,
                contentType: false,
                processData: false,
            });
        }
    });

    $("body").on("change", ".ajax-file-upload", function () {
        var it = $(this);
        if (this.files && this.files[0]) {
            var data = new FormData();
            data.append('file', this.files[0]);
            $.ajax({
                method: 'POST',
                url: ajax_file_upload_url,
                data: data,
                success: function (response) {
                    alert('Загружено');
                    it.siblings(".ajax-file-id").val(response['id']);
                    it.siblings(".ajax-file-name").val(response['name']);
                },
                cache: false,
                contentType: false,
                processData: false,
            });
        }
    });

    $("body").on("click", ".ajax-file-delete", function(event) {
        event.preventDefault();

        $(this).closest(".repeater-item").remove();
        var data = new FormData();
        data.append('file_id', $(this).attr("data-file-id"));
        data.append('_method', 'delete');
        console.log('sending');
        $.ajax({
            method: 'POST',
            url: ajax_file_delete_url,
            data: data,
            success: function (response) {
                alert('Удалено');
            },
            cache: false,
            contentType: false,
            processData: false,
        })
    });
});