@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/reasons" ] )
@endsection

@section ( 'title' )
    Update goal reason
@endsection

@section ( 'content' )
    <form action="/goals/{{ $goalid }}/reasons/{{ $reason->id }}" method="POST" style="padding: 5px 8px 0;">
        @include ( 'partials.input.description', [ 'value' => $reason->description ] )

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>
@endsection