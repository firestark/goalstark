@extends ( 'page.overview' )

@section ( 'title' )
    My tasks
@endsection

@section( 'content' )
    
    @if ( count ( $tasks ) )
        <section class="mdc-card">
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
                @if ( count ( $today ) )
                    <h6 class="mdc-list-group__subheader">Today</h6>

                    @foreach ( $today as $task )
                        @include ( 'partials.task', [ 'task' => $task ] )
                    @endforeach
                @endif

                @if ( count ( $later ) )
                    @if ( count ( $today ) )
                        <hr class="mdc-list-divider">
                    @endif
                    <h6 class="mdc-list-group__subheader">Later</h6>

                    @foreach ( $later as $task )
                        @include ( 'partials.task', [ 'task' => $task ] )
                    @endforeach
                @endif
            </ul>
        </section>
    @endif

    @include ( 'partials.link.fab', [ 'link' => '/tasks/select-goal', 'action' => 'add' ] )

@endsection


@section( 'mdc-js' )
    @parent
    
    <script>
        @if ( count ( $tasks ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection