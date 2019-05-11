@extends( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/goals/' ] )
@endsection

@section ( 'title' )
    Add goal
@endsection

@section ( 'content' )
    <form method="POST" action="/goals/" style="padding: 16px 8px 80px;">
        @include ( 'partials.input.title', [ 'value' => '' ] )
        @include ( 'partials.input.due', [ 'value' => time ( ) ] )
        
        @include ( 'partials.input.description' )
        @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
    </form>
@endsection