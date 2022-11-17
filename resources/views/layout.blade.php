<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Box')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <ul class="nav">
        <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
        @auth
            <li><a class="{{ request()->routeIs('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Créer un post</a></li>
            <li><a href="{{ route('logout') }}">Déconnexion</a></li>
            <li class="username"><p><b>{{ Auth::user()->name }}</b></p></li>
        @else
            <li><a class="{{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Inscription</a></li>
            <li><a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Connexion</a></li>
        @endauth
    </ul>
    @includeWhen($errors->any(), '_errors')
    @if (session('success'))
        <div class="flash-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="main">
        @yield('content')
    </div>
</body>
</html>