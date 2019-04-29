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

    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" href="/resources/styles/bundle.css">
    <link rel="icon" href="/favicon.png">
    <meta name="theme-color" content="#fafafa">
</head>

<body class="mdc-typography">
  
    @yield ( 'page' )

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

    <div id="triangle" style="background: #909090;"></div>
    <div id="triangle2" style="background: #909090;"></div>

    <svg class="svg-bg" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <circle id="a" cx="1468" cy="133" r="35"></circle>
            <mask id="h" x="0" y="0" width="70" height="70" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use>
            </mask>

            <circle id="b" cx="236.5" cy="732.5" r="23.5"></circle>
            <mask id="i" x="0" y="0" width="47" height="47" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#b"></use>
            </mask>

            <circle id="c" cx="1120.5" cy="945.5" r="28.5"></circle>
            <mask id="j" x="0" y="0" width="57" height="57" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#c"></use>
            </mask>
        
            <path id="d" d="M1193.375 302.875l44.6 77.25h-89.2z"></path>
            <mask id="k" x="0" y="0" width="89.201" height="77.25" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#d"></use>
            </mask>

            <path id="e" d="M1610.8 513.3l34.14 59.128h-68.278z"></path>
            <mask id="l" x="0" y="0" width="68.277" height="59.13" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#e"></use>
            </mask>

            <path id="f" d="M51.045 967.864l38.314 66.362H12.73z"></path>
            <mask id="m" x="0" y="0" width="76.629" height="66.362" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#f"></use>
            </mask>

            <path id="g" d="M46.045 311.097l26.5 45.897H19.546z"></path>
            <mask id="n" x="0" y="0" width="52.997" height="45.897" fill="#fff">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#g"></use>
            </mask>
        </defs>

        <g class="bg-color" style="mix-blend-mode:overlay;" fill="none" fill-rule="evenodd" opacity=".40" stroke="#FFF">
            <use class="svg-bg_element" mask="url(#h)" stroke-width="6" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use>
            <use class="svg-bg_element" mask="url(#i)" stroke-width="6" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#b"></use>
            <use class="svg-bg_element opacity-anim" mask="url(#j)" stroke-width="6" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#c"></use>
            <path class="stroke-anim" d="M657.5 848.5l46 46" stroke-width="3" stroke-linecap="square"></path>
            <use class="svg-bg_element" mask="url(#k)" stroke-width="6" transform="rotate(90 1193.375 341.5)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#d"></use>
            <use class="svg-bg_element" mask="url(#l)" stroke-width="6" transform="rotate(45 1610.8 542.863)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#e"></use>
            <use class="svg-bg_element rotate-anim" mask="url(#m)" stroke-width="6" transform="rotate(45 51.045 1001.045)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#f"></use>
        </g>
    </svg>

    


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