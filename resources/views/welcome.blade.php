{{--
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Cypress Hill Partners
            </div>

            @if (auth()->user()) @if (auth()->user()->userType() == 'admin')
            <h1>Hello, {{ auth()->user()->name }}</h1>
            <a href="{{ url('/admin') }}">Admin Portal</a> @elseif (auth()->user()->userType() == 'standard')
            <h1>Hello, {{ auth()->user()->name }}</h1>
            <a href="{{ url('/' . auth()->user()->id . '/portfolio') }}">My Portolio</a> @elseif (auth()->user()->userType()
            == 'ghost')
            <h1>Hello, {{ auth()->user()->name }}</h1>
            <a href="https://google.com">Exclusive Portal</a> @endif @else
            <a href="{{ url('/login') }}">Login</a> @endif


        </div>
    </div>
</body>

</html> --}}





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cypress Hill Partners</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.4-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />

    <style>
        .decor {
            color: goldenrod;
        }

        .bgimg {
            background-image: url(/images/background.PNG);
            width: 100%;
            height: 370px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .lol {
            width: 100%;
            height: 200px;

        }
    </style>

    <script defer>
        document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any nav burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

                });
            });
        }

        });
    </script>
</head>

<body>

    <nav class="navbar ">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                    <img src="https://www.cypresshillspartners.com/uploads/5/9/5/6/59561431/cypresshills-black-yellow.png" alt="Cypress Hills Partners">
                  </a>

            <a class="navbar-item is-hidden-desktop" href="#" target="_blank">
                    <span class="icon" style="color: #345eff;">
                        <i class="fas fa-american-sign-language-interpreting"></i>
                    </span>
                  </a>

            <a class="navbar-item is-hidden-desktop" href="#" target="_blank">
                    <span class="icon" style="color: #55acee;">
                        <i class="fab fa-accessible-icon"></i>
                    </span>
                  </a>

            <div class="navbar-burger burger" data-target="navMenubd-example">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenubd-example" class="navbar-menu is-active">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link  is-active" href="#">
                        Stuff?
                      </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item " href="#">
                          Some stuff
                        </a>

                        <hr class="navbar-divider">
                        <div class="navbar-item">
                            <div>
                                <p class="is-size-6-desktop">
                                    <strong class="has-text-info">Ha.Ha.Ha</strong>
                                </p>

                                <small>
                                <a class="bd-view-all-versions" href="/versions">View all versions</a>
                              </small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable is-mega">
                    <div class="navbar-link">
                        Vision
                    </div>
                    <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
                        <div class="container is-fluid">
                            <div class="columns">
                                <div class="column">
                                    <h1 class="title is-6 is-mega-menu-title">What to put here</h1>
                                    <a class="navbar-item" href="#">
                                        <div class="navbar-content">
                                            <p>
                                                <small class="has-text-info">Jan 1 2019</small>
                                            </p>
                                            <p>We did some stuffs</p>
                                        </div>
                                    </a>
                                    <a class="navbar-item" href="#">
                                        <div class="navbar-content">
                                            <p>
                                                <small class="has-text-info">Jan 15 2019</small>
                                            </p>
                                            <p>We did some more stuffs</p>
                                        </div>
                                    </a>
                                    <a class="navbar-item" href="#">
                                        <div class="navbar-content">
                                            <p>
                                                <small class="has-text-info">Jan 30 2019</small>
                                            </p>
                                            <p>We topped it off with many many stuffs</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="column">
                                    <h1 class="title is-6 is-mega-menu-title">Our Company</h1>
                                    <a class="navbar-item " href="/about">
                                        About
                                    </a>
                                    <a class="navbar-item " href="/people">
                                        People
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item " href="/originate">
                                        Originate
                                    </a>
                                    <a class="navbar-item " href="/specialty-lending">
                                        Specialty Lending
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr class="navbar-divider">
                        <div class="navbar-item">
                            <div class="navbar-content">
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <strong>Stay in the loop!</strong>
                                        </div>
                                    </div>
                                    <div class="level-right">
                                        <div class="level-item">
                                            <a class="button bd-is-rss is-small" href="/enroll">
                                    <span class="icon is-small">
                                      <i class="fa fa-rss"></i>
                                    </span>
                                    <span>Enroll</span>
                                  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="navbar-item " href="#">
                    <span class="bd-emoji">❤️</span> &nbsp;WhatToPutHere
                </a>

            </div>
            <div class="navbar-end">
                    @if (auth()->user())
                    <div class="navbar-item has-dropdown is-hoverable">
                        <div class="navbar-link ">
                            {{-- <img class="nav-profilepic" src="https://static.wixstatic.com/media/1bfda4_6f8ae00a346644a89245f331fc6c6b8e~mv2_d_3476_5214_s_4_2.jpeg?dn="> --}}
                            <span>{{ auth()->user()->name }}</span>    
                        </div>
                        <div class="navbar-dropdown">
                                @if (auth()->user()->isAdmin())
                                    <a class="navbar-item" href="/admin">
                                        Admin Page
                                    </a>
                                @else
                                    <a class="navbar-item" href="/{{auth()->user()->id}}/portfolio">
                                        My Portfolio
                                    </a>
                                @endif
                                <hr class="navbar-divider">
                                {{-- if I remove this href it doesn't seemingly affect the logout - what gives? --}}
                                <a class="navbar-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">@csrf</form>
                            @endif
                        </div>
                    </div>
                </div>
        </div>
        </div>
        </div>
    </nav>

    <div class="bgimg" style="padding-top: 70px;">
        <div class="has-text-centered">
            <div style="                          
                font-size: 4em;
                margin-top: 0px;   
                background-color: black;
                color: #fff; 
                display: inline-block;
                padding: 0.5rem;">
                <h1 class="" style="">
                   <i>Cypress Hills<span style="color:goldenrod">&nbsp;Partners</span></i></h1>

            </div>

        </div>
        <div class="has-text-centered">
            <h1 class="title" style="
            margin-top: 10px;
            margin-bottom: 25px;
            background-color: black;
            color: #fff; 
            display: inline-block;
            padding: 0.5rem;
            
            ">
                THE NEW STANDARD IN FINANCIAL INVESTING
            </h1>
        </div>
        <div class=" has-text-centered">
            @if (auth()->user())
                @if (auth()->user()->userType() == 'admin')
                    {{-- <h1>Hello, {{ auth()->user()->name }}</h1> --}}
                    <span class="title is-1 "><a href="{{ url('/admin') }}" class="button is-large has-text-white" style="background-color:#ffbf00">Admin Portal</a></span>
                @elseif (auth()->user()->userType() == 'standard')
                    {{-- <h1>Hello, {{ auth()->user()->name }}</h1> --}}
                    <span class="title is-1 "><a href="{{ url('/' . auth()->user()->id . '/portfolio') }}" class="button is-large has-text-white" style="background-color:#ffbf00">My Portfolio</a></span>
                @endif
            @else
                <span class="title is-1 "><a href="{{ url('/login') }}" class="button is-large has-text-white" style="background-color:#ffbf00">Login</a></span>
            @endif 
        </div>
    </div>

    <div>
        <h1 class="title has-text-centered" style="margin-bottom: 50px; margin-top: 50px">What our customers are saying about us</h1>
    </div>
    <section class="container" style="">
        <div class="columns features">
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-content">
                        <div class="content">
                            <h4>Martin Scorsese</h4>
                            <p>I gave them $20 and they gave me back $30 after a week. 10/10 would do business again. I think
                                that..
                            </p>
                            <p><a href="#">See what film legend Martin Scorsese is saying</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-content">
                        <div class="content">
                            <h4>Anne Hathaway</h4>
                            <p>My uncle once said that the best things come in a few seconds of insane courage. That's why I
                                invested and..</p>
                            <p><a href="#">Click here to see what film icon Anne Hathaway is saying about us</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-content">
                        <div class="content">
                            <h4>Ken Jeong</h4>
                            <p>I was very satisfied with how I was treated and..</p>
                            <p><a href="#">Click here to learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


<br>


    <div style="margin-top: 50px">
    <div class="box cta">
        <p class="has-text-centered">
            <span class="tag is-primary">New</span> We've just won first place at the Superville Investor's Awards 2019.
        </p>
    </div>


    <br>

    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="column is-3 is-offset-2">
                    <h2><strong>Blah blah blah</strong></h2>
                    <ul>
                        <li><a href="#">La la la</a></li>
                    </ul>
                </div>
                <div class="column is-3">
                    <h2><strong>Blah blah blah</strong></h2>
                    <ul>
                        <li><a href="#">La la la</a></li>
                    </ul>
                </div>
                <div class="column is-4">
                    <h2><strong>Blah blah blah</strong></h2>
                    <ul>
                        <li><a href="#">La la la</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>