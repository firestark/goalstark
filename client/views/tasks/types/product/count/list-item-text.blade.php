<span class="mdc-list-item__text" style="width: 100%;">
    <span class="mdc-list-item__primary-text">{{ $task->description }}</span>        
    <span class="mdc-list-item__secondary-text">
        {{ count ( array_filter ( app::make ( dietitian::class )->today ( ), function ( $consumation ) use ( $task ) { return $consumation->product->id === $task->product->id; } ) ) }} 
        / {{ $task->times }}
    </span>     
</span>