<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Portfolio</title>
    <style>
        .stick-bot {
            min-height: 67vh;
        }
        .decor {
            color: #FBC033;
        }
        .le-decor {
            font-weight: 200 !important;
        }
    </style>
</head>
<body>
    
    @include('layouts.partials.header')
    
    <main class="stick-bot">
        <div class="container">
            <div class="has-text-centered">
                <h1 class="title"><span class="decor">Portfolio of</span> <span class="le-decor">{{ $user[0]->name }}</span></h1>
            </div>
        </div>
        <div class="container">&nbsp;</div>
        <div class="container">&nbsp;</div>
        <div class="container">&nbsp;</div>
        <div class="container">&nbsp;</div>
        <div class="container">&nbsp;</div>
        <div class="container">&nbsp;</div>
        <div class="container">
            <div class="has-text-centered">
                <p>hello</p>
            </div>
        </div>
    </main>



    @include('layouts.partials.footer')
</body>
</html>