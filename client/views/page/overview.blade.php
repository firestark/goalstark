@extends ( 'master' )

@section ( 'page' )
    <div id="app">
        <header class="mdc-top-app-bar mdc-top-app-bar--fixed">
            <div class="mdc-top-app-bar__row">
                <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">                
                    
                    @include ( 'partials.theme-switcher' )
                    @include ( 'partials.logout' )

                </section>
            </div>
        </header>

        <div id="page">
            <nav id="rail-navigation">
                <ul>
                    <li>
                        <a href="/" class="{{ ( request::uri ( ) === '/' ) ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M12 10.9c-.61 0-1.1.49-1.1 1.1s.49 1.1 1.1 1.1c.61 0 1.1-.49 1.1-1.1s-.49-1.1-1.1-1.1zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm2.19 12.19L6 18l3.81-8.19L18 6l-3.81 8.19z"/>
                            </svg>
                            <span>Goals</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tasks/" class="{{ ( request::uri ( ) === '/tasks/' ) ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                            </svg>
                            <span>Tasks</span>  
                        </a>
                    </li>
                    <li>
                        <a href="/apps/" class="{{ ( request::uri ( ) === '/apps/' ) ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
                            </svg>
                            <span>Apps</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <main>
                @yield ( 'content' )
            </main>
        </div>

        <footer id="bottom-navigation" class="mdc-card">
            <div class="mdc-tab-bar" role="tablist">
                <div class="mdc-tab-scroller">
                    <div class="mdc-tab-scroller__scroll-area">
                        <div class="mdc-tab-scroller__scroll-content">
                            
                            <a href="/" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === '/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"/>
                                            <path d="M12 10.9c-.61 0-1.1.49-1.1 1.1s.49 1.1 1.1 1.1c.61 0 1.1-.49 1.1-1.1s-.49-1.1-1.1-1.1zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm2.19 12.19L6 18l3.81-8.19L18 6l-3.81 8.19z"/>
                                        </svg>
                                    </span>
                                    <span class="mdc-tab__text-label">Goals</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>

                            <a href="/tasks/" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === '/tasks/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"/>
                                            <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                                        </svg>
                                    </span>
                                    <span class="mdc-tab__text-label">Tasks</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/tasks/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>

                            <a href="/apps/" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === '/apps/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"/>
                                            <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
                                        </svg>
                                    </span>
                                    <span class="mdc-tab__text-label">Apps</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/apps/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection


@section ( 'mdc-js' )
    <script>
        const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo ( document.querySelector ( '.mdc-top-app-bar' ) );
    </script>
@endsection