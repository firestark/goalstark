<?php

app::share ( goalManager::class, function ( $app )
{
    return new flatfileGoalManager (
        $app [ 'goals file' ],
        $app [ 'goals' ] );
} );
