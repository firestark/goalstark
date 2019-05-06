@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection

@section ( 'content' )
    <form method="POST" action="/tasks/" style="padding: 0 8px;">
        @foreach ( $goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        <input type="hidden" name="type" value="{{ $type }}">

        @if ( $type === 'due' )
            @include ( 'partials.input.due', [ 'value' => time ( ) ] )
        @endif

        @if ( $type !== 'protein' )
            @include ( 'partials.input.description', [ 'value' => '' ] )
        @endif

        @if ( $type === 'protein' )
            @include ( 'partials.input.protein', [ 'value' => 0, 'autofocus' => true ] )
        @endif

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>
@endsection