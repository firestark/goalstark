<form method="POST" action="/tasks/{{ $task->id }}" style="height: 100%;">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        <input type="hidden" name="type" value="due">
        @include ( 'partials.input.due', [ 'value' => $task->due ] )
        @include ( 'partials.input.description', [ 'value' => $task->description ] )
    </section>
</form>