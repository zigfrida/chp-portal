<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cypress Hills Partners</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.4-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
    <style type="text/css">
        html,
        body {
            font-family: 'Open Sans';
        }

        img {
            padding: 5px;
        }
        
        .tabs li.is-active a {
            border-bottom-color: black;
            color: black;
            opacity: 0;
        }
    </style>
</head>

<body style="background-color: #a38560;background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);">
    <section class="hero is-fullheight is-default is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <figure class="image" style="margin-top: 20px">
                            <img src="{{url('/images/logo.png')}}" alt="Cypress Hills Partners">
                        </figure>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
                                <ul>
                                    <li class="is-active"><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/people">People</a></li>
                                    <li><a href="/originate">Originate</a></li>
                                    <li><a href="/specialty-landing">Specialty Lending</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-5">
                        <figure class="image is-4by3">
                            <img src="{{url('/images/super_growth.svg')}}" alt="Description">
                        </figure>
                    </div>
                    <div class="column is-6 is-offset-1">
                        <h1 class="title is-2" style="font-family: 'Playfair Display', serif;">
                            A boutique alternative merchant banking firm based out of Vancouver.
                        </h1>
                        <h2 class="subtitle is-4" style="font-family: 'Playfair Display', serif; margin-top:5px;">
                            Jumping into 2019 with a fresh new look.
                        </h2>
                        <br>

                        @if (auth()->user())
                            @if (auth()->user()->userType() == 'admin')
                                <h1>Hello, {{ auth()->user()->name }}</h1>
                                <a href="{{ url('/admin') }}" class="button">Admin Portal</a>
                            @elseif (auth()->user()->userType() == 'standard')
                                <h1>Hello, {{ auth()->user()->name }}</h1>
                                <a href="{{ url('/' . auth()->user()->id . '/portfolio') }}" class="button">My Portolio</a>
                            @elseif (auth()->user()->userType()== 'ghost')
                                <h1>Hello, {{ auth()->user()->name }}</h1>
                                <a href="https://google.com" class="button">Exclusive Portal</a>
                            @endif
                        @else
                            <a href="{{ url('/login') }}" class="button is-medium is-warning " style="background: white">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-foot">
            <div class="container">
                <div class="tabs is-centered">
                    <ul>
                        <li><a>LinkedIn</a></li>
                        <li><a>Contact Us</a></li>
                        <li>
                            <a href="https://www.google.com/maps/place/1080+Mainland+St,+Vancouver,+BC+V6B+2T4/@49.2756006,-123.1225802,17z/data=!3m1!4b1!4m5!3m4!1s0x548673d65a82a923:0x19c1da5918a84be7!8m2!3d49.2755971!4d-123.1203915">
                                <figure>
                                    <img class="image is-48x48" src="{{url('/images/google_maps.svg')}}">
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>