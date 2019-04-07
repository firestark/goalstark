<!doctype html>
<html lang="en-GB" data-theme="{{ session::has('theme') ? session::get('theme') : 'light' }}">

<head>
    <!--[if IE]>
      http-equiv="refresh" content="0; URL='https://browsehappy.com'"
    <![endif]-->
    <meta charset="utf-8">
    <title>Goalstark</title>
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
                <span class="mdc-top-app-bar__title">Goalstark</span>
            </section>
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
                @if(session::get('theme') === 'dark')
                    <a href="/theme/light" class="mdc-top-app-bar__action-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M24 0H0v24h24V0z"/>
                            <path opacity=".3" d="M6 13.59c0 1.6.62 3.1 1.76 4.24 1.13 1.14 2.64 1.76 4.24 1.76V5.1L7.76 9.35C6.62 10.48 6 11.99 6 13.59z"/><path d="M17.66 7.93L12 2.27 6.34 7.93c-3.12 3.12-3.12 8.19 0 11.31C7.9 20.8 9.95 21.58 12 21.58s4.1-.78 5.66-2.34c3.12-3.12 3.12-8.19 0-11.31zM12 19.59c-1.6 0-3.11-.62-4.24-1.76C6.62 16.69 6 15.19 6 13.59s.62-3.11 1.76-4.24L12 5.1v14.49z"/>
                        </svg>
                    </a>
                @else
                    <a href="/theme/dark" class="mdc-top-app-bar__action-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M24 0H0v24h24V0z"/>
                            <path opacity=".3" d="M6 13.59c0 1.6.62 3.1 1.76 4.24 1.13 1.14 2.64 1.76 4.24 1.76V5.1L7.76 9.35C6.62 10.48 6 11.99 6 13.59z"/><path d="M17.66 7.93L12 2.27 6.34 7.93c-3.12 3.12-3.12 8.19 0 11.31C7.9 20.8 9.95 21.58 12 21.58s4.1-.78 5.66-2.34c3.12-3.12 3.12-8.19 0-11.31zM12 19.59c-1.6 0-3.11-.62-4.24-1.76C6.62 16.69 6 15.19 6 13.59s.62-3.11 1.76-4.24L12 5.1v14.49z"/>
                        </svg>
                    </a>
                @endif
            </section>
        </div>
    </header>

    <div class="mdc-top-app-bar--fixed-adjust">
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