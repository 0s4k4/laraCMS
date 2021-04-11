<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
</head>

<body>

    <div class="container">

        <h2>plantilla principal</h2>
        <!--se utiliza para mandar a llamar una pagina para complementar-->
        @include('modulos.menu')
        

        <!--se utiliza para mandar a llamar contenido -->
        @yield('contenido')


        
    </div>


</body>

</html>