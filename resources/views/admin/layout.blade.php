<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @push('icons')
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/public/admin/assets/img/favicons/favicon.png">
    @endpush


    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="/public/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="/public/admin/assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="/public/admin/assets/js/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/public/admin/assets/js/plugins/select2/select2-bootstrap.min.css">

    @stack('icons')

    @stack('styles')
</head>


<body>

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Sidebar -->
    <nav id="sidebar">
        @include('admin.partials.sidebar')
    </nav>

    <header id="header-navbar" class="content-mini content-mini-full">
        <h1>@yield('page-name')</h1>
    </header>

    <main id="main-container">
        @yield('main')
    </main>
</div>

<div class="block-saver hidden">
    @stack('hidden')
</div>


<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="/public/admin/assets/js/core/jquery.min.js"></script>
<script src="/public/admin/assets/js/core/bootstrap.min.js"></script>
<script src="/public/admin/assets/js/core/jquery.slimscroll.min.js"></script>
<script src="/public/admin/assets/js/core/jquery.scrollLock.min.js"></script>
<script src="/public/admin/assets/js/core/jquery.appear.min.js"></script>
<script src="/public/admin/assets/js/core/jquery.countTo.min.js"></script>
<script src="/public/admin/assets/js/core/jquery.placeholder.min.js"></script>
<script src="/public/admin/assets/js/core/js.cookie.min.js"></script>
<script src="/public/admin/assets/js/app.js"></script>

<!-- Page Plugins -->
<script src="/public/admin/assets/js/plugins/chartjs/Chart.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="/public/admin/assets/js/be.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<script src="/public/admin/assets/js/plugins/select2/select2.full.min.js"></script>
@stack('scripts')
<!-- Page JS Code -->

<script>
    var ajax_image_upload_url = '{{ route('admin.image.store') }}';
    var ajax_image_delete_url = '{{ route('admin.image.destroy') }}';
    var ajax_file_upload_url = '{{ route('admin.materials.store') }}';
    var ajax_file_delete_url = '{{ route('admin.materials.destroy') }}';
    @stack('js-vars')
</script>

<script>
    jQuery(function () {
        // Init page helpers (CountTo plugin)
        App.initHelpers(['select2', 'appear-countTo']);

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });





    class MyUploadAdapter {
        constructor( loader ) {
            // The file loader instance to use during the upload.
            this.loader = loader;
        }

        // Starts the upload process.
        upload() {
            return new Promise( ( resolve, reject ) => {
                this._initRequest();
                this._initListeners( resolve, reject );
                this._sendRequest();
            } );
        }

        // Aborts the upload process.
        abort() {
            if ( this.xhr ) {
                this.xhr.abort();
            }
        }

        // Initializes the XMLHttpRequest object using the URL passed to the constructor.
        _initRequest() {
            const xhr = this.xhr = new XMLHttpRequest();

            // Note that your request may look different. It is up to you and your editor
            // integration to choose the right communication channel. This example uses
            // a POST request with JSON as a data structure but your configuration
            // could be different.
            xhr.open( 'POST', ajax_image_upload_url, true );
            xhr.responseType = 'json';
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector("[name~=csrf-token][content]").content);
        }

        // Initializes XMLHttpRequest listeners.
        _initListeners( resolve, reject ) {
            const xhr = this.xhr;
            const loader = this.loader;
            const genericErrorText = 'Couldn\'t upload file:' + ` ${ loader.file.name }.`;

            xhr.addEventListener( 'error', () => reject( genericErrorText ) );
            xhr.addEventListener( 'abort', () => reject() );
            xhr.addEventListener( 'load', () => {
                const response = xhr.response;

                // This example assumes the XHR server's "response" object will come with
                // an "error" which has its own "message" that can be passed to reject()
                // in the upload promise.
                //
                // Your integration may handle upload errors in a different way so make sure
                // it is done properly. The reject() function must be called when the upload fails.
                if ( !response || response.error ) {
                    return reject( response && response.error ? response.error.message : genericErrorText );
                }

                // If the upload is successful, resolve the upload promise with an object containing
                // at least the "default" URL, pointing to the image on the server.
                // This URL will be used to display the image in the content. Learn more in the
                // UploadAdapter#upload documentation.
                resolve( {
                    default: response.url
                } );
            } );

            // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
            // properties which are used e.g. to display the upload progress bar in the editor
            // user interface.
            if ( xhr.upload ) {
                xhr.upload.addEventListener( 'progress', evt => {
                    if ( evt.lengthComputable ) {
                        loader.uploadTotal = evt.total;
                        loader.uploaded = evt.loaded;
                    }
                } );
            }
        }

        // Prepares the data and sends the request.
        _sendRequest() {
            // Prepare the form data.
            const data = new FormData();
            data.append( 'image', this.loader.file );

            // Important note: This is the right place to implement security mechanisms
            // like authentication and CSRF protection. For instance, you can use
            // XMLHttpRequest.setRequestHeader() to set the request headers containing
            // the CSRF token generated earlier by your application.

            // Send the request.
            this.xhr.send( data );
        }
    }

    // ...

    function MyCustomUploadAdapterPlugin( editor ) {
        editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
            // Configure the URL to the upload script in your back-end here!
            return new MyUploadAdapter( loader );
        };
    }

    @stack('script')
</script>

</body>
</html>