@include ( 'partials.input.product.select', [ 'products' => app::make ( productManager::class )->all ( ), 'selected' => $task->product ?? null ] )
@include ( 'partials.input.count', [ 'value' => $task->times ?? 1 ] )
