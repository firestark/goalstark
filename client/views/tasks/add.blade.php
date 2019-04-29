@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/tasks/">
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
    </section>
@endsection