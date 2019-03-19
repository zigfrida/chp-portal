<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/portfolio.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Portfolio</title>
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
        <div class="container">
            <div class="has-text-centered">
                <section class="section">
                    @yield('client-portfolio')
                </section>
            </div>
        </div>
        <div class="has-text-centered">
            <section class="section">
                @if(auth()->user()->userType() == 'admin')
                    @yield('client-comment')
                @endif
            </section>
        </div>
    </div>
        
        <div class="container">
            <div class="has-text-centered">
                <h1 class="title"><span class="decor">Documents For</span> <span class="le-decor"> {{ $user[0]->name }}</span></h1>
            </div>
        </div>
        {{-- If admin, give them the ability to upload files for the user --}}
        @if (auth()->check())
            @if (auth()->user()->isAdmin())
                @yield('fileupload')
            @else
                hey {{ $user[0]->name }} NOT AN ADMIN
            @endif        
        @endif
    </main>

    @include('layouts.partials.footer')
</body>
</html>