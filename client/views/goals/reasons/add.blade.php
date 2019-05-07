@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/goals/' ] )
@endsection

@section ( 'title' )
    My goal's reasons
@endsection

@section ( 'content' )
    <form action="/goals/{{ $goalid }}/reasons" method="POST" style="padding: 5px 8px 0;">
        @include ( 'partials.input.description' )

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>
@endsection