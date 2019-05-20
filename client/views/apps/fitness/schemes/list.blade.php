@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/' ] )
@endsection

@section ( 'title' )
    My schemes
@endsection

@include ( 'apps.fitness.tab-bar' )

@section ( 'content' )
    <h1>My schemes</h1>
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/fitness/add', 'action' => 'add' ] )
@endsection