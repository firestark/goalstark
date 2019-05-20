@if ( isset ( $task ) )
    @foreach ( $task->completions as $consumation )
        <input type="hidden" name="consumations[]" value="{{ $consumation->id }}">
    @endforeach
@endif

@include ( 'partials.input.product.select', [ 'products' => app::make ( productManager::class )->all ( ), 'selected' => $task->product ?? null ] )

@include ( 'partials.input.count', [ 'value' => $task->times ?? 1 ] )
@include ( 'partials.input.due', [ 'value' => $task->due ?? time ( ) ] )