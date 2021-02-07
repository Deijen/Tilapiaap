<!DOCTYPE html>
<html>
<head>
    <title>INFOME</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p><strong>Cantidad de tilapias: </strong> {{$Cultivo->cantidadTilapias}}</p>
    <p><strong>Intensidad: </strong> {{$Cultivo->intensidad}}</p>
    <p><strong>Estado: </strong> {{$Cultivo->estado}}</p>
    <p><strong>Oxigeno: </strong> {{$Cultivo->oxigeno}}</p>
    <p><strong>temperatura: </strong> {{$Cultivo->temperatura}}</p>
    <p><strong>PH: </strong> {{$Cultivo->ph}}</p>
    <p><strong>Amonio: </strong> {{$Cultivo->amonio}}</p>
    <p><strong>Nitritos: </strong> {{$Cultivo->nitritos}}</p>
    <p><strong>Dioxido de carbono: </strong> {{$Cultivo->dioxidoCarbono}}</p>
    <p><strong>Fosfatos: </strong> {{$Cultivo->fosfatos}}</p>
    <p><strong>Cloruros: </strong> {{$Cultivo->cloruros}}</p>
    <p><strong>Sulfatos: </strong> {{$Cultivo->sulfatos}}</p>

</html>