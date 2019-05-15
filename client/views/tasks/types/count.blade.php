<form method="POST" action="/tasks/{{ $task->id }}">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach
        <input type="hidden" name="type" value="count">

        @include ( 'partials.input.count', [ 'value' => $task->times ] )
        @include ( 'partials.input.due', [ 'value' => $task->due ] )
        @include ( 'partials.input.description', [ 'value' => $task->description ] )
        
        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </section>
</form>

<section style="padding: 0 8px;">
    <h2 class="mdc-typography--headline6">Completion status</h2>
    <p>{{ count ( $task->completions ) }} of {{ $task->times }}</p>
</section>