@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/tasks/{{ $task->id }}">

            @foreach ( $task->goals as $goal )
                <input type="hidden" name="goals[]" value="{{ $goal }}">
            @endforeach

            @if ( $task instanceof task\due )
                @include ( 'partials.input.due', [ 'value' => $task->due ] )
            @endif

            @if ( ! $task instanceof task\protein )
                @include ( 'partials.input.description', [ 'value' => $task->description ] )
            @endif

            @if ( $task instanceof task\protein )
                @include ( 'partials.input.due', [ 'value' => $task->goal ] )
            @endif

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>    
    </section>
@endsection