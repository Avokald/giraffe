<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>


<body>

<div class="sidebar">
    @include('admin.partials.sidebar')
</div>

@yield('main')

</body>
</html>