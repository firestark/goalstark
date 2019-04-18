@extends ( 'page.details' )

@section('navigation')
    @include('partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section( 'content' )
    @include ( 'partials.task-list' )
    @include ( 'partials.link.fab', [ 'link' => "/{$goal->id}/tasks/add", 'action' => 'add' ] )
@endsection