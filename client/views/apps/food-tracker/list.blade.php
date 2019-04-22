@extends ( 'apps.food-tracker.page.overview' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps' ] )
@endsection

@section ( 'content' )
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/food-tracker/add', 'action' => 'add' ] )
@endsection