@extends('page.details')

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section" style="margin-bottom: 32px;">
        <form method="POST" action="/">
            <div id="title-and-due">
                @include ( 'partials.input.title', [ 'value' => '' ] )
                @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            </div>
            
            @include ( 'partials.input.description', [ 'value' => '' ] )
            @include ( 'partials.input.reasons', [ 'value' => '' ] )
            @include ( 'partials.input.rating', [ 'value' => 1, 'caption' => 'Importance' ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
        </form>
    </section>
@endsection