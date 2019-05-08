@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/goals/' ] )
@endsection

@section ( 'title' )
    My goal's reasons
@endsection


@section ( 'tab-bar' )
    <div class="mdc-tab-bar mdc-tab-bar--top" role="tablist">
        <div class="mdc-tab-scroller">
            <div class="mdc-tab-scroller__scroll-area">
                <div class="mdc-tab-scroller__scroll-content">
                    
                    <a href="/goals/{{ $goalid }}" class="mdc-tab {{ ( request::uri ( ) === "/goals/{$goalid}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Details</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/goals/{$goalid}" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/goals/{{ $goalid }}/tasks" class="mdc-tab {{ ( request::uri ( ) === "/goals/{$goalid}/tasks" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Tasks</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/goals/{$goalid}/tasks" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/goals/{{ $goalid }}/reasons" class="mdc-tab {{ ( request::uri ( ) === "/goals/{$goalid}/reasons" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Reasons</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/goals/{$goalid}/reasons" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ( 'content' )
    @if ( count ( $reasons ) )
        <section class="mdc-card">
            <ul class="mdc-list mdc-list--linked">
                @foreach ( $reasons as $reason )
                    <li class="mdc-list-item" tabindex="0">
                        <a href="/goals/{{ $goalid }}/reasons/{{ $reason->id }}">
                            <span class="mdc-list-item__text">{{ $reason->description }}</span>
                        </a>

                        <a href="/goals/{{ $goalid }}/reasons/{{ $reason->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                <path d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    @include ( 'partials.link.fab', [ 'link' => "/goals/{$goalid}/reasons/add", 'action' => 'add' ] )
@endsection

@section ( 'mdc-js' )
    @parent

    <script>        
        @if ( count ( $reasons ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection