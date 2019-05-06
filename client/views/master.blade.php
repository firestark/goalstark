<!doctype html>
<html lang="en-GB" data-theme="{{ session::has ( 'theme' ) ? session::get ( 'theme' ) : 'light' }}">

<head>
    <meta charset="utf-8">
    <title>Goalstark®</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link rel="stylesheet" href="/resources/styles/bundle.css">
    <link rel="icon" href="/favicon.png">
    <meta name="theme-color" content="#fff">
</head>

<body class="mdc-typography">
  
    @yield ( 'page' )

    @if ( session::has ( 'message' ) )
        <div class="mdc-snackbar" style="bottom: 138px;">
            <div class="mdc-snackbar__surface">
                <div class="mdc-snackbar__label"
                    role="status"
                    aria-live="polite">
                    {{ session::get ( 'message' ) }}
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