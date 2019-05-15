@extends ( 'page' )

@section ( 'title' )
    My tasks
@endsection

@section( 'content' )
    @if ( count ( $tasks ) )
        <section class="content">
            <ul class="mdc-list mdc-list--two-line mdc-list--with-chip mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
                @if ( count ( $today ) )
                    <h6 class="mdc-list-group__subheader">Today</h6>

                    @foreach ( $today as $task )
                        @include ( 'tasks.task', [ 'task' => $task ] )
                    @endforeach
                @endif

                @if ( count ( $later ) )
                    <h6 class="mdc-list-group__subheader">Later</h6>

                    @foreach ( $later as $task )
                        @include ( 'tasks.task', [ 'task' => $task ] )
                    @endforeach
                @endif

                @if ( count ( $overdue ) )
                    <h6 class="mdc-list-group__subheader">Overdue</h6>

                    @foreach ( $overdue as $task )
                        @include ( 'tasks.task', [ 'task' => $task ] )
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

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No tasks here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">Add a tasks by clicking the <span> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                </svg>
                </span> button
            </p>
        </div>
    @endif

    @include ( 'partials.link.fab', [ 'link' => '/tasks/select-goal', 'action' => 'add' ] )
@endsection


@section( 'js' )
    @parent
    
    <script>
        @if ( count ( $tasks ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection