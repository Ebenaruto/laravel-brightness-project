<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LightApp</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
        <style>
            
             body {
            display: flex;
            justify-content: center; /* Centre horizontalement */
            align-items: center; /* Centre verticalement */
            height: 100vh; /* Hauteur à 100% de la fenêtre visible */
            margin: 0;
            padding: 0;
        }

        .content {
            text-align: center; /* Centre le texte horizontalement */
        }

        .title {
            font-size: 3rem; /* Taille de police personnalisée */
            font-weight: 600; /* Poids de la police personnalisé */
        }
        </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    light
                </div>
                @livewire('light')
            </div>
        </div>
        @livewireScripts
    </body>
</html>
