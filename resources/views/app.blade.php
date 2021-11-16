<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title> Ponto Digital - @yield('title') </title>
    @stack('styles')
     <style>
         :root {
            --dark-blue:  rgba(8, 9, 23);
            --dark-blue-transparent:  rgba(8, 9, 23,0.6);
            --light-blue:  #344487;
            --blue-link: #096ae8;
            --green: #06a749;
            --dark-green: #0c8f42;

         }
    </style>
</head>
 <body>
        @yield('content')
</body>
@stack('scripts')
</html>