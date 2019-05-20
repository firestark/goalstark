<?php

route::get ( '/fitness/add', function ( )
{
    return view::ok ( 'apps.fitness.schemes.add' );
} );