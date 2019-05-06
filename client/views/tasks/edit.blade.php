@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <form method="POST" action="/tasks/{{ $task->id }}">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        @if ( $task instanceof task\due )
            @include ( 'partials.input.due', [ 'value' => $task->due ] )
        @endif

        @if ( ! $task instanceof task\protein )
            @include ( 'partials.input.description', [ 'value' => $task->description ] )
        @endif

        @if ( $task instanceof task\protein )
            @include ( 'partials.input.protein', [ 'value' => $task->goal ] )
        @endif

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>    
@endsection

@section ( 'bottom-app-bar' )
    <footer id="bottom-navigation" class="mdc-card">
        <div class="mdc-tab-bar" role="tablist">
            <div class="mdc-tab-scroller">
                <div class="mdc-tab-scroller__scroll-area">
                    <div class="mdc-tab-scroller__scroll-content">
                        
                        <a href="/tasks/{{ $task->id }}" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === "/tasks/{$task->id}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                            <span class="mdc-tab__content">
                                <span class="mdc-tab__icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M14.59 2.59c-.38-.38-.89-.59-1.42-.59H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8.83c0-.53-.21-1.04-.59-1.41l-4.82-4.83zM15 18H9c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H9c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1s-.45 1-1 1zm-2-6V3.5L18.5 9H14c-.55 0-1-.45-1-1z"/>
                                    </svg>
                                </span>
                                <span class="mdc-tab__text-label">Details</span>
                            </span>
                            <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/tasks/{$task->id}" ) ? 'mdc-tab-indicator--active' : '' }}">
                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                            </span>
                            <span class="mdc-tab__ripple"></span>
                        </a>

                        <a href="/tasks/{{ $task->id }}/goals" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === "/tasks/{$task->id}/goals" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                            <span class="mdc-tab__content">
                                <span class="mdc-tab__icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path d="M0 0h24v24H0V0z"/>
                                            <path opacity=".87" d="M0 0h24v24H0V0z"/>
                                        </g>
                                        <path d="M4 13c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0 4c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0-8c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm4 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zM7 8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1zm-3 5c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0 4c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0-8c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm4 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zM7 8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1z"/>
                                    </svg>
                                </span>
                                <span class="mdc-tab__text-label">Goals</span>
                            </span>
                            <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/tasks/{$task->id}/goals" ) ? 'mdc-tab-indicator--active' : '' }}">
                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                            </span>
                            <span class="mdc-tab__ripple"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>   
@endsection

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection