@extends ( 'page' )

@section ( 'style' )
    <style>
        .mdc-snackbar {
            bottom: 212px;
        }
    </style>
@endsection

@section ( 'title' )
    My goal's tasks
@endsection

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' ] )
@endsection

@section ( 'top-app-bar' )
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
    @if ( count ( $tasks ) )
        <section class="content">
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
                @if ( count ( $today ) )
                    <h6 class="mdc-list-group__subheader">Today</h6>

                    @foreach ( $today as $task )
                        @include ( 'goals.tasks.task', [ 'task' => $task ] )
                    @endforeach
                @endif

                @if ( count ( $later ) )
                    <h6 class="mdc-list-group__subheader">Later</h6>

                    @foreach ( $later as $task )
                        @include ( 'goals.tasks.task', [ 'task' => $task ] )
                    @endforeach
                @endif

                @if ( count ( $overdue ) )
                    <h6 class="mdc-list-group__subheader">Overdue</h6>

                    @foreach ( $overdue as $task )
                        @include ( 'goals.tasks.task', [ 'task' => $task ] )
                    @endforeach
                @endif

                @if ( count ( $completed ) )
                    <h6 class="mdc-list-group__subheader">Completed</h6>

                    @foreach ( $completed as $task )
                        @include ( 'tasks.task', [ 'task' => $task ] )
                    @endforeach
                @endif
            </ul>
        </section>
    @else
        <div style="text-align: center; margin: 56px auto 0; width: 230px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path opacity=".3" d="M5 19h14V5H5v14zm2.41-7.41L10 14.17l6.59-6.59L18 9l-8 8-4-4 1.41-1.41z"/>
                <path d="M18 9l-1.41-1.42L10 14.17l-2.59-2.58L6 13l4 4zm1-6h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64S3 4.72 3 5v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z"/>
            </svg>

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold;">No tasks here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">Select some tasks by clicking the <span style="vertical-align: text-top;"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path d="M3 17.46v3.04c0 .28.22.5.5.5h3.04c.13 0 .26-.05.35-.15L17.81 9.94l-3.75-3.75L3.15 17.1c-.1.1-.15.22-.15.36zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                </svg> 
                </span> button
                or create a new task with the
                <span style="vertical-align: text-top;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg> </span> button
            </p>
        </div>
    @endif

    @include ( 'partials.link.fab', [ 'link' => "/goals/{$goal->id}/select-tasks", 'action' => 'edit', 'secondary' => 'mdc-fab--secondary' ] )
    @include ( 'partials.link.fab', [ 'link' => "/goals/{$goal->id}/tasks/select-type", 'action' => 'add' ] )
@endsection

@section ( 'js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );

        @if ( count ( $tasks ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection