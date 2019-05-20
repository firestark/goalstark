<?php

route::get ( '/fitness/exercises', function ( )
{
    return view::ok ( 'apps.fitness.exercises.list' );
} );