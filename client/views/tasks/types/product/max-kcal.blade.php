<form method="POST" action="/tasks/{{ $task->id }}">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach
        <input type="hidden" name="type" value="max kcal">

        @include ( 'partials.input.product.kcal', [ 'value' => $task->kcal ] )
    </section>

    @include ( 'partials.input.fab', [ 'action' => 'save' ] )
</form>