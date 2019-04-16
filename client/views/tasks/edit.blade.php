@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/{$task->goalid}/tasks" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/{{ $task->goalid }}/tasks/{{ $task->id }}">

            @include ( 'partials.input.description', [ 'value' => $task->description ] )
            @include ( 'partials.input.due', [ 'value' => $task->due ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>    
    </section>
@endsection