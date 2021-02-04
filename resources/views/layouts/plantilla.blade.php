<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->

    <style>
        .active{
            color: red;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->
    @include('layouts.partials.header')

    <h1>@yield('content')</h1>
    <!-- footer -->


    <!-- script -->

</body>
</html>