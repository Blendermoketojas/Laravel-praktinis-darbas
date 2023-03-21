<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FarumCinema</title>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/FontAwesome/bars-solid.svg">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1 class="headerText">Farum Cinema</h1>
    </div>

    <div class="sidebar">
        <p class="meniuIcon">≡ Menu</p>

        <button class="sideButton" onclick="window.location='{{ url('Miestai') }}'">Miestai</button>
        
        <button class="sideButton" onclick="location.href='{{ url('confirmation') }}'">Laisvos filmų salės</button>
        @if(session()->has('user') && session('user')['is_admin'])
            <button class="sideButton" onclick="location.href='{{ url('/destroySession') }}'">Logout</button>
        @else
        <button class="sideButton" onclick="location.href='{{ url('/login') }}'">Login</button>
        @endif
    </div>
    <div class="mainBody">
    @yield('mainas')
  @yield('filmosale') 
  @yield('AdminRemoval')
        @if (Route::current()->getName() == 'Confirmation')
            @yield('confirmation')
        @endif
        @if (Route::current()->getName() == 'login')
            @yield('login')
        @endif
        @if (Route::current()->getName() == 'miestai')
            @yield('cities')
        @endif
    </div>
</body>

</html>
