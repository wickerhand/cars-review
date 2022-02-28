<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cars Review</title>

    <!-- Js -->
    <script src="{{ asset('/public/assets/js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
    @if($jsFiles)
        @for ($i =0 ; $i < count($jsFiles); $i++)
            <script src="{{ asset('/public/assets'.$jsFiles[$i]) }}" type="text/javascript"></script>
        @endfor    
    @endif
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/public/assets/css/general.css') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<header>
    <div class="logo">
        <p class="logo_item"><span class="logo_item--span">Cars</span>Review</p>
    </div>
    <!--
    <nav class="navigation">
        <ul class="navigation__list">
            <li class="navigation__list--item">Test1</li>
            <li class="navigation__list--item">Teste2</li>
            <li class="navigation__list--item">Teste3</li>
            <li class="navigation__list--item">Teste4</li>
        </ul>
    </nav>
    -->
    <div class="buttons">
        <a href="{{url('/signup')}}" class="buttons_item">Cadastrar</a>
        <a href="{{url('/login')}}" class="buttons_item btn-primary">Entrar</a>
    </div>
</header>