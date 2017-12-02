<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ elixir("css/core.css") }}">
    <title>Laravel</title>
</head>
<body class="hg">  
    <header class="hg__header">
        <div class="logo">logo</div>
        <div class="navigation">
            <div>link</div>
            <div>link</div>
            <div>link</div>
            <div>link</div>
            <div>link</div>
            <div>link</div>
            <div>link</div>
        </div>
        <div class="search">search</div>
    </header>
    <main class="hg__main">
        @yield('content')
    </main>
    <aside class="hg__left">Menu</aside>
    <aside class="hg__right">Ads</aside>
    <footer class="hg__footer">Footer</footer>
    </body>
</html>
