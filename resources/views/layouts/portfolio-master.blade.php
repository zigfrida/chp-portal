<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Header-->
    <script type="text/javascript" src="{{ URL::asset('js/menu.js') }}" defer></script>

    <!--Footer-->
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Maitree&display=swap" rel="stylesheet">

    <title>Portfolio</title>

    <script type="text/javascript" src="{{ URL::asset('js/dropState.js') }}" defer></script>
    
</head>
<body>
    
    @include('layouts.partials.header')

    <main class="">
        <div class="container">
            <div class="has-text-centered">
                <h1 class="title"><span class="decor">Portfolio of</span> <span class="le-decor">{{ $user[0]->subscriber_name }}</span></h1>
            </div>            
        </div>

        <br>
        @if ($user[0]->access_level == 0 && $user[0]->form_level == 0)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/random.css') }}">
            @include('forms.formstack')
        @elseif ($user[0]->access_level == 0 && $user[0]->form_level == 1)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/random.css') }}">
            @if(auth()->user()->userType() == 'admin')
                @include('forms.formstackcheck')
            @else 
                @include('forms.formstackdone')
            @endif
        @elseif ($user[0]->access_level == 1 && $user[0]->form_level == 1)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/random.css') }}">
            @include('forms.subagreement')
        @elseif ($user[0]->access_level == 1 && $user[0]->form_level == 2)

            <link rel="stylesheet" type="text/css" href="{{ asset('css/random.css') }}">
        
        

            @if(auth()->user()->userType() == 'admin')
                @include('forms.subagreementcheck')
            @else 
                @include('forms.subagreementdone')
            @endif
            
        @elseif ($user[0]->access_level == 2 && $user[0]->form_level == 2)
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/portfolio.css') }}">
        
        

        <div class="container">
            <div class="has-text-centered">
                @yield('client-portfolio')
            </div>
        </div>
        <br><br>

        @if(auth()->user()->userType() == 'admin')
            <div class="columns is-centered is-mobile">
                <div class="column">
                    <div class="has-text-centered">
                        <h1 class="title"><span class="decor">Create comment for</span> <span class="le-decor"> {{ $user[0]->subscriber_name }}</span></h1>
                    </div>
                    <br>
                    <div class="columns is-centered is-mobile">
                        <div class="column is-half">
                                @yield('client-comment')
                        </div>
                    </div>
                </div>
            </div>
        @else 
            <div class="columns is-centered is-mobile">
                <div class="column">
                    <div class="has-text-centered">
                        <h1 class="title"><span class="decor">Management</span> <span class="le-decor"> Comment</span></h1>
                    </div>
                    <br>
                    <div class="columns is-centered is-mobile">
                        <div class="column is-half">
                            <div class="tile is-ancestor">
                                <div class="tile is-parent">
                                    <article class="tile is-child box">
                                    <p class="subtitle">{{$fundInfo[0]->management_comment}}</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <hr>
        
        <div class="container">
            <div class="has-text-centered ">
                <h1 class="title"><span class="decor">Documents For</span> <span class="le-decor"> {{ $user[0]->subscriber_name }}</span></h1>
            </div>
            <br>
            <div class="columns is-centered">
                @if (auth()->check())
                    @if (auth()->user()->isAdmin())
                        @yield('fileuploadbetter')
                    @endif        
                @endif
            </div>
        </div>

        <div class="container">
            @yield('show-files')
        </div>
 
        <br>
        @if(!$user_table[0]->existing == 'existing' && auth()->user()->isAdmin())
            <div class="columns is-centered">
                <a class="button is-light" href="{{url($user[0]->user_id.'/filledform')}}" style="padding:10px" id="downloadDoc1">Download Subscription Agreement (PDF)</a><br>
                <a class="button is-light" href="{{url($user[0]->user_id.'/formtest')}}" style="padding:10px" id="downloadDoc2">>> Web Version</a><br>
            </div>
        @endif
    </main>



    

    @endif


    <br>


    @include('layouts.partials.footer')
</body>
</html>