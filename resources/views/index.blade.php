<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div>
            @foreach ($trains as $train)
                <ul>
                    <li>
                        {{$train->Azienda}}
                    </li>
                    <li>
                        {{$train->Stazione_di_partenza}}
                    </li>
                    <li>
                        {{$train->Stazione_di_arrivo}}
                    </li>
                    <li>
                        {{$train->Orario_di_partenza}}
                    </li>
                    <li>
                        {{$train->Orario_di_arrivo}}
                    </li>
                    <li>
                        {{$train->Codice_Treno}}
                    </li>
                    <li>
                        {{$train->Numero_Carrozze}}
                    </li>
                    <li>
                        @if($train->In_orario)
                        In orario
                    @else
                        In ritardo
                    @endif
                    </li>
                    <li>
                        @if($train->Cancellato)
                        Cancellato
                    @else
                        Confermato
                    @endif
                    </li>
                </ul>    
            @endforeach
            </div>
    </body>
</html>
