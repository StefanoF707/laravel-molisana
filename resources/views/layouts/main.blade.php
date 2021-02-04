<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Home</title>
</head>
<body>

    @include("partials.header")

    <!-- sections -->
        @yield('content')
    <!-- /sections -->

    @include("partials.footer")

</body>
</html>
