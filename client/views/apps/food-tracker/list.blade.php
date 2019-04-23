@extends ( 'apps.food-tracker.page.overview' )

@section ( 'content' )
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/food-tracker/add', 'action' => 'add' ] )
@endsection