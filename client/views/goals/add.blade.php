@extends( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/goals/' ] )
@endsection

@section ( 'title' )
    Add goal
@endsection

@section ( 'content' )
    <form method="POST" action="/" style="padding: 8px;">
        @include ( 'partials.input.title', [ 'value' => '' ] )
        @include ( 'partials.input.due', [ 'value' => time ( ) ] )
        
        @include ( 'partials.input.description', [ 'value' => '' ] )
        @include ( 'partials.input.reasons', [ 'value' => '' ] )
        @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
    </form>
@endsection