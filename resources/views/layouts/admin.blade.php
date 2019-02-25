<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Administrator's Portal</title>
</head>
<body>
    <div class="container">
        <section class="section">
            @yield('navbar')
        </section>
    </div>

    <div class="container has-text-centered">
        <section class="section">
            @yield('signup-email')
        </section>
    </div>

    
    <div class="container content">
        <section class="section">
            @yield('all-da-users')
        </section>
    </div>

</body>
</html>