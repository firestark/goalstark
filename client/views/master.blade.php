<!doctype html>
<html lang="en-GB" data-theme="{{ session::has ( 'theme' ) ? session::get ( 'theme' ) : 'light' }}">

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
  
    @yield ( 'top-app-bar' )

    <div id="app">
        <main>
            @yield ( 'content' )
        </main>
    </div>

    @if ( session::has ( 'message' ) )
        <div class="mdc-snackbar">
            <div class="mdc-snackbar__surface">
                <div class="mdc-snackbar__label"
                    role="status"
                    aria-live="polite">
                    {{ session::get ( 'message' ) }}
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
        @if ( session::has ( 'message' ) )
            const snackbar = mdc.snackbar.MDCSnackbar.attachTo ( document.querySelector ( '.mdc-snackbar' ) );
            snackbar.open ( );
        @endif
    </script>
    
    @yield ( 'mdc-js' )  
</body>

</html>