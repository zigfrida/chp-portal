<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> {{-- I DON'T KNOW WHAT THE NEXT LINE OF CODE DOES EVEN THOUGH I HAVE GOOGLED IT SO MANY TIMES --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            -webkit-transform: scale(0.9);
            */ -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
        }

        .stick-bot {
            min-height: 67vh;
        }

        .ml {
            margin-left: 1.47em;
        }

        .decor {
            color: #FBC033;
        }

        .le-decor {
            font-weight: 200 !important;
        }   

    </style>
</head>

<body class="Site">
    @include('layouts.partials.header')
    <div class="container has-text-centered">
        <div class="paragraph" style="text-align:left;"><span>&#8203;&#8203;Cypress Hills Partners is a boutique alternative merchant banking firm based out of Vancouver.<br> The company specializes in the origination of private equity, specialty private debt, and other uniquely structured products. The firm was founded by Kelly Klatik and Dean Linden and is currently dedicated to the fast growing specialty lending and origination marketplace on a global basis.</span><br /><br /><span>Cypress Hills is adept in leveraging technology and financial structuring experience to accelerate the growth of specialty lending platforms and service providers creating a differentiated market advantage.</span><br /><br /><span>Direct privately negotiated investments may include consumer loans, small and medium sized enterprise (SME) loans, advances against corporate trade receivables, senior secured loans, regulatory capital, and mezzanine debt.</span><br /><br /><span>Indirect investments may include investments in platforms through the provision of credit facilities, equity or other instruments.</span></div>
    </div>
    @include('sweet::alert')
</body>

</html>