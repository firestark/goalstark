<form method="POST" action="/tasks/{{ $task->id }}" style="height: 100%;">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        @include ( 'partials.input.count', [ 'value' => $task->times ] )      
    </section>
</form>