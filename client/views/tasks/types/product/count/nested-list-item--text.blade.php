{{ count ( array_filter ( app::make ( dietitian::class )->today ( ), function ( $consumation ) use ( $task ) { return $consumation->product->id === $task->product->id; } ) ) }} 
/ {{ max ( array_map ( function ( $task ) { return $task->times; }, $tasks ) ) }} consumed


