<?php

app::share ( taskManager::class, function ( $app )
{
    return new flatfileTaskManager ( 
        $app [ 'tasks file' ],
        $app [ 'tasks' ]
    );
} );