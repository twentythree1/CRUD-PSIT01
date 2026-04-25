<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSIT01</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=dictionary" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/sass/custom.scss', 'resources/css/about.css'])
</head>
<body>
    <!-- main -->
    <div class="container py-5">
        @yield('content')
    </div>
</body>
</html>