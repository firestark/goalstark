<?php

app::share ( \task\manager::class, function ( $app )
{
    return new flatfileTaskManager ( 
        $app [ 'tasks file' ],
        $app [ 'tasks' ]
    );
} );