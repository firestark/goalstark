<?php

app::share ( \task\manager::class, function ( $app )
{
    return new flatfileTaskManager (
        $app [ dietitian::class ],
        $app [ 'tasks file' ],
        $app [ 'tasks' ]
    );
} );