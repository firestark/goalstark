@include ( 'partials.input.counter', 
    [ 
        'title' => 'Consumations', 
        'completions' => app::make ( dietitian::class )->eatenTimes ( $task->product ),
        'uncomplete_uri' => "/goals/{$goal->id}/tasks/{$task->id}/uncomplete",
        'complete_uri' => "/goals/{$goal->id}/tasks/{$task->id}/complete",
    ] 
)