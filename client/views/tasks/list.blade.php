@extends ( 'page' )

@section ( 'top-app-bar-second-row' )
    @include ( 'partials.top-app-bar.main-second-row' )
@endsection

@section( 'content' )
    @include ( 'partials.task-list' )
    @include ( 'partials.link.fab', [ 'link' => '/add/task', 'action' => 'add' ] ) 
@endsection

@section( 'mdc-js' )
    @parent

    <script>
        @if ( count ( $tasks ) )
            mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
        @endif
    </script>
@endsection