<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link href="{{ asset('css/form.css') }}" rel="stylesheet" > -->
    <!--<script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>

<body>
    <div class="container">
    <!-- header -->
    <!-- nav -->
        <div class="grid grid-cols-3">
            <div class="bg-blue-400"></div>

            <div class="bg-blue-200">@yield('content')</div>

            <div class="bg-blue-400"></div>
        </div>
    </div>
    <!-- footer -->
    <!-- script -->
</body>

</html>
