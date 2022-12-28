<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projectRiot</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/nav.css">
        @yield('css')
    </head>
    <body>
    <div class="header">
        <div class="bg-itens-header">
            <a href="League-of-Legends">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/lol_sf.png" class="img"></div>
                        <div class="div-txt"><h1 class="header-1">League of Legends</h1></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-itens-header">
            <a href="Legends-of-Runeterra">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/lor_sf.png" class="img"></div>
                        <div class="div-txt"><h1 class="header-1">Legends of Runeterra</h1></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-itens-header">
            <a href="Teamfight-Tatics">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/tft_sf.png" class="img"></div>
                        <div class="div-txt"><h1 class="header-1">Teamfight Tatics</h1></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-itens-header">
            <a href="Valorant">
                <div class="item-header">
                    <div class="align-header">
                        <div class="div-img"><img src="/img/vava_sf.png" class="img-vava"></div>
                        <div class="div-txt"><h1 class="header-2">Valorant</h1></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="bg-nav">

        <nav class="nav-header">

            @foreach ($arr as $item)
                <div class="nav-item">
                    <h2 class="nav-txt"><a href={{str_replace(' ','-', $item)}}>{{str_replace('-',' ', $item)}}</a></h2>
                </div>
            @endforeach

        </nav>
    </div>

    @yield('content')

    </body>
</html>