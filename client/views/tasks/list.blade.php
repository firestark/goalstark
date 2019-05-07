@extends ( 'page' )

@section ( 'title' )
    My tasks
@endsection

@section( 'content' )
    @include ( 'partials.tasks.list' )
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