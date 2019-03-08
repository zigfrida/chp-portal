<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- I DON'T KNOW WHAT THE NEXT LINE OF CODE DOES EVEN THOUGH I HAVE GOOGLED IT SO MANY TIMES --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Cypress Hill Partners</title>

    <style>
        .Site {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        /* .Site-content {
            flex: 1;
        } */

        .shrinker {
            /* zoom: 0.3; */
            /* -moz-transform: scale(0.3);
            /* -moz-transform-origin: 0 0; */
            -webkit-transform:scale(0.9); */
            -moz-transform:scale(0.9);
            -ms-transform:scale(0.9);
            transform:scale(0.9);
        }

        .stick-bot {
            min-height: 67vh;
        }

        .ml {
            margin-left: 1.47em;
        }
    </style>
</head>
<body class="Site">
    @include('layouts.partials.header')
    
    <main class="stick-bot">
        <div class="container has-text-centered">
            <h1 class="title is-2">Register a New Client</h1>
        </div>
        <div class="container has-text-centered shrinker">
            <section class="section">
                @yield('new-client-ayy')
            </section>
        </div>

        <hr class="hr" style="height: 10px;">
        
        <div class="container content">
            <section class="section">
                @yield('list-clients')
            </section>
        </div>

        <hr class="hr" style="height: 10px;">

        <div class="container has-text-centered">
            <h1 class="title is-2">Do Something Else</h1>
            <p>something else</p>
        </div>

        <hr class="hr" style="height: 10px;">

        <div class="container has-text-centered">
            <h1 class="title is-2">Do Something Else</h1>
            <p>something else</p>
        </div>
    </main>

    @include('layouts.partials.footer')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
</body>
</html>