@extends('page.details')

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/">
            <input type="hidden" name="id" value="{{ uniqid ( ) }}">

            <div id="title-and-due">
                @include ( 'partials.input.title', [ 'value' => '' ] )
                @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            </div>
            
            @include ( 'partials.input.description', [ 'value' => '' ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
        </form>
    </section>
@endsection