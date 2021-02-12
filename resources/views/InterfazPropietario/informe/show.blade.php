<!DOCTYPE html>
<html>
<head>
    <title>INFOME CULTIVO {{$Cultivo->id_cultivo}}</title>
</head>
<body>
    <h1>INFOME CULTIVO {{$Cultivo->id_cultivo}}</h1>
    <p>{{ $date }}</p>
    <p><strong>Cantidad de tilapias: </strong> {{$Cultivo->cantidadTilapias}}</p>
    <p><strong>Intensidad: </strong> {{$Cultivo->intensidad}} </p>
    <p><strong>Estado: </strong> {{$Cultivo->estado}} </p>
    <p><strong>Oxigeno: </strong> {{$Cultivo->oxigeno}} (ppm) (Optimo > 4.5)</p>
    <p><strong>temperatura: </strong> {{$Cultivo->temperatura}} (Centigrados) (32 > Optimo > 28)</p>
    <p><strong>PH: </strong> {{$Cultivo->ph}} (9 > Optimo > 6.5)</p>
    <p><strong>Amonio: </strong> {{$Cultivo->amonio}} (ppm) (2 > Optimo > 0.6)</p>
    <p><strong>Nitritos: </strong> {{$Cultivo->nitritos}} (ppm) (0.1 > Optimo)</p>
    <p><strong>Dioxido de carbono: </strong> {{$Cultivo->dioxidoCarbono}} (ppm) (20 > Optimo)</p>
    <p><strong>Fosfatos: </strong> {{$Cultivo->fosfatos}} (ppm) (1.5 > Optimo > 0.6)</p>
    <p><strong>Cloruros: </strong> {{$Cultivo->cloruros}} (ppm) (10 > Optimo) </p>
    <p><strong>Sulfatos: </strong> {{$Cultivo->sulfatos}} (ppm) (18 > Optimo) </p>

</html>