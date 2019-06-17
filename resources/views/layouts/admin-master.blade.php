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

    {{-- <link rel="stylesheet" type="text/css" href="/css/home.css"> --}}

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
            -moz-transform: scale(0.9);
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

    <main class="stick-bot">
        <div class="container has-text-centered">
            <h1 class="title is-1"><span class="decor">Admin</span> <span class="le-decor"> Panel</span></h1>
        </div>

        <hr class="hr" style="height: 3px;">

        <div class="container content">
            <div class="container has-text-centered">
                <h1 class="title"><span class="decor">All</span><span class="le-decor"> Clients</span></h1>
            </div>


                <input type="text" style="max-width:30%; position:relative; top:35px;" class="input is-pulled-right" name="search" id="search" placeholder="search for portfolio"/>
            

            
                  
            <section class="section">
                @yield('list-clients')
            </section>
        </div>

        <hr>

        <div class="container shrinker">
            <div class="container has-text-centered">
                <h1 class="title"><span class="decor">Register</span><span class="le-decor"> New Client</span></h1>
            </div>
            <section class="section">
                @yield('new-client-ayy')
            </section>
        </div>
        <hr>

        <div class="container shrinker">
            <div class="container has-text-centered">
                <h1 class="title"><span class="decor">Register</span><span class="le-decor"> Existing Client</span></h1>
            </div>
            <section class="section">
                @yield('existing-client')
            </section>
        </div>
        <hr>

        <div class="container shrinker">
            <div class="container has-text-centered">
                <h1 class="title"><span class="decor">Management</span><span class="le-decor"> Comment</span></h1>
            </div>
            <section class="section">
                @yield('management-comment')
            </section>
        </div>
        <hr>

        <div class="container has-text-centered">
            <h1 class="title"><span class="decor">Upload</span><span class="le-decor"> Files</span></h1>
        </div>
        <br><br>
        @yield('upload-to-class')
        <hr>
        <br>
        <div class="container has-text-centered">
            <h1 class="title"><span class="decor">View</span><span class="le-decor"> Files Uploaded</span></h1>
        </div>
        <div class="container content">
            <section class="section">
                @yield('show-files-uploaded')
            </section>
        </div>
    </main>

    @include('layouts.partials.footer')

    			
			
    <script>

        $(document).ready(function(){


            $('#search').on('keyup',function(){
                var query = $(this).val();
                console.log("query coming: "+query);

                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: "{{ URL::to('search') }}",
                        method: "POST",
                        dataType :'json',                        
                        data: {query : query, _token:_token},
                        success:function(data)
                        {
                            
                            console.log(data.BProfile);
                            $('#A_portoflios').html(data.AProfile);
                            $('#B_portfolios').html(data.BProfile);
                               
                        }
                        
                    });
                
            })

        });

    </script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>

</html>