<?php

use function compact as with;

route::get ( '/{exercise_id}', function ( $exercise_id )
{
    $exercise = app::make ( exercise\manager::class )->find ( $exercise_id );
    return view::ok ( 'apps.fitness.exercises.edit', with ( 'exercise' ) );
} );