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
    
    <main class="Site-content stick-bot">
        <div class="container has-text-centered">
            <h1 class="title is-2">Register a New Client</h1>
        </div>
        <div class="container has-text-centered">
            <section class="section">
                @yield('new-client-ayy')
            </section>
        </div>
        
        <div class="container content">
            <section class="section">
                @yield('list-clients')
            </section>
        </div>
    </main>


    @include('layouts.partials.footer')
</body>
</html>