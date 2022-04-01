<html>
    <head>
        <title>SKY - @yield('titulo')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="icon" href="https://img.pixers.pics/pho_wat(s3:700/FO/33/04/38/20/700_FO33043820_1e6678fbb526ce4a652723a84836a088.jpg,700,700,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,650,jpg)/vinilos-fuego-letra-h.jpg.jpg">
        <title>Vista de registros</title>
    </head>
    <body style="background-image: url('storage/playa.jpg'); background-position: center center; background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        {{--Al llamar un elemento por su nombre desde otra página
            podremos implementar la plantilla--}}
        {{--@section('barralateral')
            This is the master sidebar.
        @show--}}
        {{--Este container es para bootstrap y no se
            debe cambiar--}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand">SKY</a>
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <div class="container">
            <br>
            @yield('contenido')
        </div>
    </body>
</html>
