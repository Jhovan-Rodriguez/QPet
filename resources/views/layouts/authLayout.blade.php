<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/logos/LogoQpet.png')}}" type="image/x-icon">
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- STYLE CSS -->
    @yield('estilos')
</head>

<body>
    @yield('contenido')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
