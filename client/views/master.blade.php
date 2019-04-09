<!doctype html>
<html lang="en-GB" data-theme="{{ session::has('theme') ? session::get('theme') : 'light' }}">

<head>
    <!--[if IE]>
      http-equiv="refresh" content="0; URL='https://browsehappy.com'"
    <![endif]-->
    <meta charset="utf-8">
    <title>Goalstark®</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" href="/resources/styles/bundle.css">
    <link rel="icon" href="/favicon.png">
    <meta name="theme-color" content="#fafafa">
</head>

<body class="mdc-typography">
  
    <header class="mdc-top-app-bar mdc-top-app-bar--fixed mdc-elevation--z2">
        <div class="mdc-top-app-bar__row">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                @yield('navigation')
                <span class="mdc-top-app-bar__title">
                    {{ (isset($title)) ? $title : 'Goalstark®' }}
                </span>
            </section>
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
                @if(session::get('theme') === 'dark')
                    <a href="/theme/light" class="mdc-top-app-bar__action-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M6.29 14.29L9 17v4c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-4l2.71-2.71c.19-.19.29-.44.29-.71V10c0-.55-.45-1-1-1H7c-.55 0-1 .45-1 1v3.59c0 .26.11.52.29.7zM12 2c.55 0 1 .45 1 1v1c0 .55-.45 1-1 1s-1-.45-1-1V3c0-.55.45-1 1-1zM4.21 5.17c.39-.39 1.02-.39 1.42 0l.71.71c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0l-.72-.71c-.39-.39-.39-1.02 0-1.41zm13.46.71l.71-.71c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-.71.71c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41z"/>
                        </svg>
                    </a>
                @else
                    <a href="/theme/dark" class="mdc-top-app-bar__action-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M6.29 14.29L9 17v4c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-4l2.71-2.71c.19-.19.29-.44.29-.71V10c0-.55-.45-1-1-1H7c-.55 0-1 .45-1 1v3.59c0 .26.11.52.29.7zM12 2c.55 0 1 .45 1 1v1c0 .55-.45 1-1 1s-1-.45-1-1V3c0-.55.45-1 1-1zM4.21 5.17c.39-.39 1.02-.39 1.42 0l.71.71c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0l-.72-.71c-.39-.39-.39-1.02 0-1.41zm13.46.71l.71-.71c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-.71.71c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41z"/>
                        </svg>
                    </a>
                @endif
            </section>
        </div>
        @yield('top-app-bar-alt-row')
    </header>

    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    @if(session::has('message'))
        <div class="mdc-snackbar">
            <div class="mdc-snackbar__surface">
                <div class="mdc-snackbar__label"
                    role="status"
                    aria-live="polite">
                    {{ session::get('message') }}
                </div>
                <div class="mdc-snackbar__actions">
                    {{-- <button type="button" class="mdc-button mdc-snackbar__action">Retry</button> --}}
                </div>
            </div>
        </div>
    @endif


    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <script src="/resources/bundle.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.1/handlebars.min.js"></script>
    
    <script>
        const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo(document.querySelector('.mdc-top-app-bar'));
        
        @if(session::has('message'))
            const snackbar = mdc.snackbar.MDCSnackbar.attachTo(document.querySelector('.mdc-snackbar'));
            snackbar.open();
        @endif
    </script>
    @yield('mdc-js')
  
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>