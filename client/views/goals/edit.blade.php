@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section" style="margin-bottom: 40px;">    
        <form method="POST" action="/{{ $goal->id }}">
            <input type="hidden" name="id" value="{{ $goal->id }}">

            <div id="title-and-due">
                @include ( 'partials.input.title', [ 'value' => $goal->title ] )
                @include ( 'partials.input.due', [ 'value' => $goal->due ] )
            </div>
            
            @include ( 'partials.input.description', [ 'value' => $goal->description ] )
            @include ( 'partials.input.rating', [ 'value' => $goal->rating, 'caption' => 'Importance' ] )

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>

    @include ( 'partials.task-list' )
@endsection