<?php

app::share ( goal\manager::class, function ( $app )
{
    return new flatfileGoalManager (
        $app [ 'goals file' ],
        $app [ 'goals' ] );
} );
