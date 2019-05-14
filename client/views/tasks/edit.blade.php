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
        <div style="text-align: center; margin: 16px auto 56px; width: 230px;">

            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
            </svg>

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">Protein task</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">
                A protein task sets a goal to consume an amount of protein every day
            </p>
        </div>
    @endif
    <form method="POST" action="/tasks/{{ $task->id }}" style="display: grid; grid-template-rows: 1fr auto; height: 100%;">
        <section style="overflow: overlay; padding: 16px 8px 80px;">
            @foreach ( $task->goals as $goal )
                <input type="hidden" name="goals[]" value="{{ $goal }}">
            @endforeach

            @if ( $task instanceof task\count )
                @include ( 'partials.input.count', [ 'value' => $task->times ] )
            @endif

            @if ( $task instanceof task\due )
                <input type="hidden" name="type" value="due">
                @include ( 'partials.input.due', [ 'value' => $task->due ] )
            @endif

            @if ( $task instanceof task\daily and ! $task instanceof task\protein )
                <input type="hidden" name="type" value="daily">
            @endif

            @if ( ! $task instanceof task\protein )
                @include ( 'partials.input.description', [ 'value' => $task->description ] )
            @endif

            @if ( $task instanceof task\protein )
                <input type="hidden" name="type" value="protein">
                @include ( 'partials.input.protein', [ 'value' => $task->goal ] )
            @endif

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </section>
        <section
            style="
                height: 56px;
                width: 100%;
                box-sizing: border-box;
                display: grid; 
                grid-template-columns: 1fr 1fr; 
                padding: 0; 
                align-items: center;
                background-color: var(--mdc-theme-background);"
                class="mdc-elevation--z3">
            <div>
                
            </div>
            <div style="display: flex; justify-content: flex-end; padding: 0 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin: 0 4px;">
                    <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
                    <path d="M4 11v2h8v-2H4zm15 7h-2V7.38L14 8.4V6.7L18.7 5h.3v13z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin: 0 4px;">
                    <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
                    <path d="M10 7H8v4H4v2h4v4h2v-4h4v-2h-4V7zm10 11h-2V7.38L15 8.4V6.7L19.7 5h.3v13z"/>
                </svg>
            </div>
        </section>
    </form>
@endsection

@section ( 'js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection