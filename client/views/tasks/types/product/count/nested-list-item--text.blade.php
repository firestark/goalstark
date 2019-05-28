{{ count ( array_filter ( app::make ( dietitian::class )->today ( ), function ( $consumation ) use ( $tasks ) { return $consumation->product->id === $tasks [ 0 ]->product->id; } ) ) }} 
/ {{ max ( array_map ( function ( $task ) { return $task->times; }, $tasks ) ) }} consumed


