<!doctype html>
<html lang="en-GB ">

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="/resources/bundle.css">

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