@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/tasks/{{ $goal }}">
            @include ( 'partials.input.type', [ 'value' => 'once' ] )
            @include ( 'partials.input.description', [ 'value' => '' ] )
            @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>
@endsection