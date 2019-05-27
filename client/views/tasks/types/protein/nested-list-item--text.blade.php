Consumed {{ $protein }} of {{ max ( array_map ( function ( $task ) { return $task->target; }, $tasks ) ) }}


