@extends('page.details')

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section" style="margin-bottom: 32px;">
        <form method="POST" action="/">
            <input type="hidden" name="id" value="{{ uniqid ( ) }}">

            <div id="title-and-due">
                @include ( 'partials.input.title', [ 'value' => '' ] )
                @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            </div>
            
            @include ( 'partials.input.description', [ 'value' => '' ] )
            @include ( 'partials.input.rating', [ 'value' => 1, 'caption' => 'Importance' ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
        </form>
    </section>

    <section>
        <div style="text-align: right; padding: 0 16px;">
            <span id="disabled-add-task" class="mdc-tooltip mdc-tooltip--left" data-mdc-tooltip="Save goal first.">
                <button class="mdc-button mdc-button--raised" disabled>Add task</button>
            </span>
        </div>
    </section>
@endsection