@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/{$goal}/tasks" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/{{ $goal }}/tasks">
            @include ( 'partials.input.type', [ 'value' => 'once' ] )
            @include ( 'partials.input.description', [ 'value' => '' ] )
            @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>
@endsection