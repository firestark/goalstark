<?php

app::share ( exercise\manager::class, function ( $app )
{
    return new flatfileExerciseManager ( 
        $app [ 'exercises file' ],
        $app [ 'exercises' ]
    );
} );