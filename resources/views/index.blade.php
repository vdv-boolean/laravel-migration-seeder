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
                        Da: {{$train->Stazione_di_partenza}} a: {{$train->Stazione_di_arrivo}}
                    </li>
                    <li>
                        Partenza:
                        {{$train->Orario_di_partenza}}
                        / Arrivo:
                        {{$train->Orario_di_arrivo}}
                    </li>
                    <li> 
                        Codice: {{$train->Codice_Treno}}
                    </li>
                    <li>
                        Carrozza: {{$train->Numero_Carrozze}}
                    </li>
                    <li>
                        Ritardo:
                        @if($train->In_orario)
                            In orario
                        @else
                            In ritardo
                        @endif
                    </li>
                    <li>
                        Stato:
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
