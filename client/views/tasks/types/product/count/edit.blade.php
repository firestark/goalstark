<form method="POST" action="/tasks/{{ $task->id }}">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach
        <input type="hidden" name="type" value="product count">

        @foreach ( $task->completions as $consumation )
            <input type="hidden" name="consumations[]" value="{{ $consumation->id }}">
        @endforeach

        @include ( 'partials.input.product.select', [ 'products' => app::make ( productManager::class )->all ( ), 'selected' => $task->product ] )

        @include ( 'partials.input.count', [ 'value' => $task->times ] )
        @include ( 'partials.input.due', [ 'value' => $task->due ] )        
    </section>

    @include ( 'partials.input.fab', [ 'action' => 'save' ] )
</form>

@include ( 'partials.input.counter', [ 'title' => 'Consumations' ] )