<?php

route::get ( '/', function ( )
{
    return view::ok ( 'apps.fitness.schemes.list' );
} );