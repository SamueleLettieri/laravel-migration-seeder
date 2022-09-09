<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($trains as $train)
        <li>
            {{$train->azienda}} - {{$train->stazione_di_partenza}} - {{$train->stazione_di_arrivo}} - {{$train->orario_di_partenza}} - {{$train->orario_di_arrivo}} - {{$train->numero_binario}} - {{$train->codice_treno}} - {{$train->numero_carrozze}} - {{$train->numero_posti}} - {{$train->in_orario}} - {{$train->cancellato}}
        </li>
        @endforeach
    </ul>
</body>
</html>