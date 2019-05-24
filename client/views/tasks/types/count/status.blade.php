@include ( 'partials.input.counter', 
    [ 
        'title' => 'Completions', 
        'completions' => count ( $task->completions ),
        'uncomplete_uri' => "/goals/{$goal->id}/tasks/{$task->id}/uncomplete",
        'complete_uri' => "/goals/{$goal->id}/tasks/{$task->id}/complete",
    ] 
)