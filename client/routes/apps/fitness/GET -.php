<?php

route::get ( '/fitness', function ( )
{
    return view::ok ( 'apps.fitness.schemes.list' );
} );