@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/tasks/{{ $goalid }}/protein">

            @include ( 'partials.input.protein', [ 'value' => 0 ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>
@endsection