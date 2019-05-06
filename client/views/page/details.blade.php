@extends ( 'master' )

@section ( 'page' )
    <div id="app">
        <header class="mdc-top-app-bar mdc-top-app-bar--fixed">
            <div class="mdc-top-app-bar__row">
                <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    @yield ( 'navigation' )
                    
                    <span class="mdc-top-app-bar__title">
                        {{ $title ?? 'Goalstark®' }}
                    </span>
                </section>
            </div>
        </header>

        <div id="page">
            <main>
                @yield ( 'content' )
            </main>
        </div>

        @yield ( 'bottom-app-bar' )
    </div>
@endsection


@section ( 'mdc-js' )
    <script>
        const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo ( document.querySelector ( '.mdc-top-app-bar' ) );
    </script>
@endsection