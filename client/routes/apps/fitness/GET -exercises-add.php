<?php

route::get ( '/fitness/exercises/add', function ( )
{
    return view::ok ( 'apps.fitness.exercises.add' );
} );