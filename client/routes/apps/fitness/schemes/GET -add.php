<?php

route::get ( '/add', function ( )
{
    return view::ok ( 'apps.fitness.schemes.add' );
} );