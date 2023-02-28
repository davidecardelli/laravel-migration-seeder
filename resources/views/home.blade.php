<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js');

</head>

<body>


    <header class="bg-black text-center py-3 mb-5">
        <h1 class="text-white">Treni</h1>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-4 justify-content-center align-items-center">
                @foreach ($trains as $train)
                    <div class="col">
                        <div class="card text-center mb-5">
                            <div class="card-body">
                                <p class="card-title mb-2"><b>Azienda: </b>{{ $train->azienda }}</p>
                                <p class="card-title mb-2"><b>Partenza: </b>{{ $train->stazione_partenza }}</p>
                                <p class="card-title mb-2"><b>Arrivo: </b>{{ $train->stazione_arrivo }}</p>
                                <p class="card-title mb-2"><b>Orario partenza: </b>{{ $train->orario_partenza }}</p>
                                <p class="card-title mb-2"><b>Orario arrivo: </b>{{ $train->orario_arrivo }}</p>
                                <p class="card-title mb-2"><b>Treno n°: </b>{{ $train->codice_treno }}</p>
                                <p class="card-title mb-2"><b>Carrozze: </b>{{ $train->numero_carrozze }}</p>
                                <p class="card-title mb-2"><b>In orario: </b>{{ $train->in_orario ? 'Si' : 'No' }}</p>
                                <p class="card-title mb-2"><b>Cancellato: </b>{{ $train->cancellato ? 'Si' : 'No' }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
