<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Soluzione integrata per il tracking di veicoli">

    <meta property="og:site_name" content="Almatrasporti"/>
    <meta property="og:title" content="Almatrasporti"/>
    <meta property="og:description" content="Soluzione integrata per il tracking di veicoli"/>
    <meta property="og:url" content="https://almatrasporti.github.io/"/>
    <meta property="og:image" content="/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:image:alt" content="Almatrasporti">
    <meta name="twitter:card" content="summary_large_image">


    <title>Almatrasporti</title>

    <link rel="home" href="https://almatrasporti.github.io">
    <link rel="icon" href="/favicon.ico">


    <!-- Insert analytics code here -->

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i"
          rel="stylesheet">
    <link rel="stylesheet" href="/assets/build/css/main.css?id=740f92cc604af9dd5007">

    <link rel="stylesheet" href="/assets/cast/asciinema-player.css" rel="stylesheet">

</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
<header class="flex items-center bg-white border-b h-24 mb-8  xl:mb-0 lg:mb-0 py-4" role="banner">
    <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
        <div class="flex items-center">
            <a href="/" title="Almatrasporti home" class="inline-flex items-center">
                <img class="h-8 md:h-10 mr-3" src="/assets/img/logo-large.svg" alt="Almatrasporti logo"/>
                <h1 class="text-lg md:text-2xl text-blue-900 font-semibold hover:text-blue-600 my-0 pr-4">
                    Almatrasporti</h1>
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center text-right md:pl-10">
        </div>
        <div class="ml-2 mt-1">
            <a href="https://github.com/almatrasporti" target="_blank">
                <i class="fab fa-github fa-2x"></i>
            </a>
        </div>
    </div>

</header>

<main role="main" class="w-full flex-auto bg-main">
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
        <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
            <div class="mt-8">

                <h1 id="intro-docs-template">Almatrasporti</h1>

                <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">Soluzione integrata per il tracking di
                    veicoli</h2>

                <p class="text-lg">Controlla in tempo reale la tua flotta veicoli
                    <br class="hidden sm:block">e prevedi i consumi per un <strong>risparmio immediato</strong>.
                </p>

                <div class="flex-row lg:flex-col my-10">
                    <a href="http://almatrasporti.cloud" target="_blank" title="Almatrasporti getting started"
                       class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">
                        Vai alla Demo 🚀
                    </a>

                    <a href="/docs/getting-started" title="Analisi dei requisiti"
                       class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded mr-4 py-2 px-6">
                        Documentazione <i class="fas fa-book"></i>
                    </a>
                </div>
                <div class="flex-row lg:flex-col my-10">
                    <a href="/docs/deep-learning-model" title="Analisi dei requisiti"
                       class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded mr-4 py-2 px-6">
                        Deep learning <i class="fas fa-robot"></i>
                    </a>

                    <a href="https://github.com/almatrasporti" target="_blank" title="Analisi dei requisiti"
                       class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded mr-4 py-2 px-6">
                        Codice sorgente <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>

            {{--            <div class="mx-auto mb-6 lg:mb-0 overflow-hidden w-full lg:w-2/3 xl:w-2/3 shadow-md border rounded-md bg-gray-300" style="background-color: #002B36;">--}}
            {{--                <asciinema-player preload="true" theme="solarized-dark" autoplay="true" cols="80" rows="24" speed="8" src="/assets/cast/installation_ubuntu18.cast"></asciinema-player>--}}
            {{--            </div>--}}
        </div>

        <hr class="block my-8 border lg:hidden">

        <div class="md:flex -mx-2 -mx-4">
            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-server fa-4x block h-12" style="color: #2d2b57;"></i>

                    <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Infrastruttura</h3>

                    <p>Infrastruttura basata su pubblicazione di messaggi tramite Broker Zookeeper + Apache Kafka.</p>
                </div>
            </div>

            <div class="mx-3 px-2 md:w-1/3 mb-8">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-terminal fa-3x block h-12" style="color: #2d2b57;"></i>

                    <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Injector</h3>

                    <p>Raccolta dati dalle centraline a bordo dei veicoli e pubblicazioni eventi.</p>
                </div>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-cog fa-3x block h-12" style="color: #2d2b57;">L1</i>

                    <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">ETL_L1</h3>

                    <p>Trasformazione dati grezzi in documenti JSON per elaborazione batch e real-time.</p>
                </div>
            </div>
        </div>

        <div class="md:flex -mx-2 -mx-4">
            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-cog fa-3x block h-12" style="color: #2d2b57;">L2</i>

                    <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">ETL_L2</h3>

                    <p>Elaborazione e salvataggio documenti su MongoDB per l'elaborazione batch.</p>
                </div>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-cog fa-3x block h-12" style="color: #2d2b57;">L3</i>

                    <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">ETL_L3</h3>

                    <p>Elaborazione e salvataggio documenti su Redis per l'elaborazione realtime.</p>
                </div>
            </div>

            <div class="mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-chart-bar fa-3x block h-12" style="color: #2d2b57;"></i>

                    <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Model Analysis</h3>

                    <p>Analisi statistica avanzata delle serie temporali raccolte dalle centraline.</p>
                </div>
            </div>

        </div>
        <div class="md:flex -mx-2 -mx-4">

            <div class="mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fas fa-robot fa-3x block h-12" style="color: #2d2b57;"></i>

                    <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Deep Learning Predictor</h3>

                    <p>Costruzione di un modello di AI tramite deep neural networks per la predizione dei consumi.</p>
                </div>
            </div>

            <div class="mx-3 px-2 md:w-1/3">
                <div class="shadow-md border rounded-md p-5 bg-box">
                    <i class="fab fa-laravel fa-3x block h-12" style="color: #2d2b57;"></i>

                    <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Dashboard webapp</h3>

                    <p>Dashboard web per la visualizzazione in tempo reali delle informazioni inviate dai veicoli e la
                        predizione dei consumi.</p>
                </div>
            </div>

            <div class="mx-3 px-2 md:w-1/3">

            </div>
        </div>

    </section>
</main>

<script src="/assets/build/js/main.js?id=f01f0dd8648e081bd0a1"></script>
<script src="/assets/cast/asciinema-player.js"></script>


<footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
    <ul class="flex flex-col md:flex-row justify-center">
        <li class="md:mr-2">
            progetto e sviluppo di <a href="#" title="Unipa Big Data">Antonio Alampi, Miriam Daniele, Roberto Gallea, Salvatore Marcantonio</a> - Unipa Big Data &copy; 2021.
        </li>
    </ul>
</footer>
</body>
</html>