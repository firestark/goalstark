<form method="POST" action="/tasks/{{ $task->id }}">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach
        <input type="hidden" name="type" value="count">
        
        @foreach ( $task->completions as $completion )
            <input type="hidden" name="completions[]" value="{{ $completion }}">
        @endforeach

        @include ( 'partials.input.count', [ 'value' => $task->times ] )
        @include ( 'partials.input.due', [ 'value' => $task->due ] )
        @include ( 'partials.input.description', [ 'value' => $task->description ] )
        
        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </section>
</form>

@include ( 'partials.input.counter', [ 'title' => 'Completions' ] )