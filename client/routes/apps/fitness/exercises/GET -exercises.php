<?php

route::get ( '/exercises', function ( )
{
    return view::ok ( 'apps.fitness.exercises.list' );
} );