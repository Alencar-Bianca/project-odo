<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="container">
        <div class="sidebar">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="content">
            <header class="navegation">
                <nav>
                    @yield('button-nav')
                </nav>
            </header>

            <main>
                @yield('content')
            </main>
        </div>
    </section>
</body>
</html>
