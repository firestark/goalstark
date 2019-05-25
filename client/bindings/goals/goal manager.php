<?php

app::share ( goal\manager::class, function ( $app )
{
    return new flatfileGoalManager (
        $app [ task\manager::class ],
        $app [ 'goals file' ],
        $app [ 'goals' ] );
} );
