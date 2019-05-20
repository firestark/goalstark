<?php

route::get ( '/exercises/add', function ( )
{
    return view::ok ( 'apps.fitness.exercises.add' );
} );