@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/reasons" ] )
@endsection

@section ( 'title' )
    Add goal reason
@endsection

@section ( 'content' )
    <form action="/goals/{{ $goalid }}/reasons" method="POST" style="padding: 21px 8px 0;">
        @include ( 'partials.input.description' )

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>
@endsection