<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c44b38f2d7.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <div class="contenedor">
        <header class="header">
            <h1>TILAPIA APP</h1>
        </header>
        <main class="contenido">
            <h1>@yield('content')</h1>
        </main>
        <aside class="sidebar">
            <h3>SIDERBAR</h3>
        </aside>
        <div class="widget-1">
            <h3>WIDGET 1</h3>
        </div>
        <div class="widget-2">
            <h3>WIDGET 2</h3>
        </div>
        <footer class="footer">
            <h3>FOOTER</h3>
        </footer>  
    </div>    
    <!-- header -->
    <!-- nav -->
    <!-- footer -->


    <!-- script -->

</body>
</html>