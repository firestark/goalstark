@extends ( 'page' )

@section ( 'top-app-bar-second-row' )
    @include ( 'partials.top-app-bar.main-second-row' )
@endsection

@section( 'content' )
    @include ( 'partials.task-list' )
    @include ( 'partials.link.fab', [ 'link' => '/add/task', 'action' => 'add' ] ) 
@endsection