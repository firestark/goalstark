@extends ( 'page' )

@section ( 'title' )
    My goal
@endsection

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/goals/' ] )
@endsection

@section ( 'tab-bar' )
    <div class="mdc-tab-bar mdc-tab-bar--top" role="tablist">
        <div class="mdc-tab-scroller">
            <div class="mdc-tab-scroller__scroll-area">
                <div class="mdc-tab-scroller__scroll-content">
                    
                    <a href="/goals/{{ $goal->id }}" class="mdc-tab {{ ( request::uri ( ) === "/goals/{$goal->id}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Details</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/goals/{$goal->id}" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/goals/{{ $goal->id }}/tasks" class="mdc-tab {{ ( request::uri ( ) === "/goals/{$goal->id}/tasks" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Tasks</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/goals/{$goal->id}/tasks" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/goals/{{ $goal->id }}/reasons" class="mdc-tab {{ ( request::uri ( ) === "/goals/{$goal->id}/reasons" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Reasons</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/goals/{$goal->id}/reasons" ) ? 'mdc-tab-indicator--active' : '' }}">
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
    <form method="POST" action="/goals/{{ $goal->id }}" style="padding: 16px 8px;">
        <input type="hidden" name="goalid" value="{{ $goal->id }}">

        @include ( 'partials.input.title', [ 'value' => $goal->title ] )
        @include ( 'partials.input.due', [ 'value' => $goal->due ] )
        
        @include ( 'partials.input.description', [ 'value' => $goal->description ] )

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>
@endsection

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection