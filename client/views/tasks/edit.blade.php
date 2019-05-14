@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    My task
@endsection

@section ( 'style' )
    <style>
        .mdc-fab {
            bottom: 136px;
        }
    </style>
@endsection

@section ( 'top-app-bar' )
    <div class="mdc-tab-bar mdc-tab-bar--top" role="tablist">
        <div class="mdc-tab-scroller">
            <div class="mdc-tab-scroller__scroll-area">
                <div class="mdc-tab-scroller__scroll-content">
                    
                    <a href="/tasks/{{ $task->id }}" class="mdc-tab {{ ( request::uri ( ) === "/tasks/{$task->id}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Details</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/tasks/{$task->id}" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/tasks/{{ $task->id }}/goals" class="mdc-tab {{ ( request::uri ( ) === "/tasks/{$task->id}/goals" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
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
@endsection

@section ( 'content' )
    @if ( $task instanceof task\protein )
        @include ( 'tasks.types.protein' )
    @elseif ( $task instanceof task\count )
        @include ( 'tasks.types.count' )
    @elseif ( $task instanceof task\due )
        @include ( 'tasks.types.due' )
    @elseif ( $task instanceof task\daily )
        @include ( 'tasks.types.daily' )
    @endif
@endsection

@section ( 'js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection