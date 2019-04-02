<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> {{-- I DON'T KNOW WHAT THE NEXT LINE OF CODE DOES EVEN THOUGH I HAVE GOOGLED IT SO MANY TIMES --}}
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

    <main class="stick-bot">
        <div class="container has-text-centered">
            <h1 class="title"><span class="decor">Admin</span> <span class="le-decor"> Panel</span></h1>
        </div>

        <hr class="hr" style="height: 3px;">

        <div class="container content">
            <h1 class="title is-2" style="margin-bottom: 0; margin-left:2.5%">All Clients</h1>
            <section class="section">
                @yield('list-clients')
            </section>
        </div>

        <hr>

        <div class="container shrinker">
            <h1 class="title is-2">Register a New Client</h1>
            <section class="section">
                @yield('new-client-ayy')
            </section>
        </div>

        <div class="container">
            <form action="/fileupload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <div class="file is-warning has-name is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="filelolol" id="file-upload">
                            <span class="file-cta">
                                <span class="file-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                                </span>
                                <span class="file-label">
                                Upload Class A File
                                </span>
                            </span>
                            <span class="file-name" id="filename">
                                
                            </span>
                            </label>
                    </div>
                </div>
                <input type="hidden" name="user_id" value="1">
                <input type="hidden" name="file_type" value="A">
                <div class="columns is-centered" style="margin-top: 10px;">
                    <button type="submit" class="button is-warning">Submit</button>
                </div>
                <script>
                    var input = document.getElementById( 'file-upload' );
                            var infoArea = document.getElementById( 'filename' );
                            input.addEventListener( 'change', showFileName );
                    
                            function showFileName( event ) {
                                var input = event.srcElement;
                                var fileName = input.files[0].name;
                                infoArea.textContent = fileName;
                            }
                </script>

            </form>

            <br><br><br>


            <form action="/fileupload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <div class="file is-warning has-name is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="filelolol" id="file-upload">
                            <span class="file-cta">
                                <span class="file-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                                </span>
                                <span class="file-label">
                                Upload Class B File
                                </span>
                            </span>
                            <span class="file-name" id="filename">
                                
                            </span>
                            </label>
                    </div>
                </div>
                <input type="hidden" name="user_id" value="1">
                <input type="hidden" name="file_type" value="B">
                <div class="columns is-centered" style="margin-top: 10px;">
                    <button type="submit" class="button is-warning">Submit</button>
                </div>
                <script>
                    var input = document.getElementById( 'file-upload' );
                            var infoArea = document.getElementById( 'filename' );
                            input.addEventListener( 'change', showFileName );
                    
                            function showFileName( event ) {
                                var input = event.srcElement;
                                var fileName = input.files[0].name;
                                infoArea.textContent = fileName;
                            }
                </script>

            </form>
            <br><br><br>
            <form action="/fileupload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <div class="file is-warning has-name is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="filelolol" id="file-upload">
                            <span class="file-cta">
                                <span class="file-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                                </span>
                                <span class="file-label">
                                Upload Classes A&B File
                                </span>
                            </span>
                            <span class="file-name" id="filename">
                                
                            </span>
                            </label>
                    </div>
                </div>
                <input type="hidden" name="user_id" value="1">
                <input type="hidden" name="file_type" value="AB">
                <div class="columns is-centered" style="margin-top: 10px;">
                    <button type="submit" class="button is-warning">Submit</button>
                </div>
                <script>
                    var input = document.getElementById( 'file-upload' );
                            var infoArea = document.getElementById( 'filename' );
                            input.addEventListener( 'change', showFileName );
                    
                            function showFileName( event ) {
                                var input = event.srcElement;
                                var fileName = input.files[0].name;
                                infoArea.textContent = fileName;
                            }
                </script>

            </form>

            <br><br><br><br><br>

            <div class="has-text-centered">
                <h1 class="title">
                    Files Uploaded by Class
                </h1>
            </div>
            <br>
            <div class="columns is-multiline">
                <h2 class="subtitle is-3">Class A and B</h2>
                @foreach ($classABFiles as $cAB)
                    <div class="column is-one-quarter">
                        Filename: {{ $cAB->filename }} <br>
                        <hr>
                    </div>
                @endforeach
            </div>
            <br>
            <hr>
            <div class="columns is-multiline">
                <h2 class="subtitle is-3">Class A</h2>
                @foreach ($classAFiles as $cA)
                    <div class="column is-one-quarter">
                        Filename: {{ $cA->filename }} <br>
                        <hr>
                    </div>
                @endforeach
            </div>
            <br>
            <hr>
            <div class="columns is-multiline">
                <h2 class="subtitle is-3">Class B</h2>
                @foreach ($classBFiles as $cB)
                    <div class="column is-one-quarter">
                        Filename: {{ $cB->filename  }} <br>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('layouts.partials.footer')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>

</html>