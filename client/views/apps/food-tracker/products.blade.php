@extends ( 'apps.food-tracker.page.overview' )

@section ( 'content' )
    <h1>Products</h1>
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/food-tracker/add', 'action' => 'add' ] )
@endsection