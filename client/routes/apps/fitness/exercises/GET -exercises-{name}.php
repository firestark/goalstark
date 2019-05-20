<?php

use function compact as with;

route::get ( '/exercises/{name}', function ( $name )
{
    $exercise = app::make ( exercise\manager::class )->find ( $name );
    return view::ok ( 'apps.fitness.exercises.edit', with ( 'exercise' ) );
} );