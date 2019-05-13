@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/tasks" ] )
@endsection

@section ( 'title' )
    Add goal task
@endsection

@section ( 'content' )
    <form action="" method="POST" style="padding: 16px 8px 80px;">
        <input type="hidden" name="goal" value="{{ $goalid }}">
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