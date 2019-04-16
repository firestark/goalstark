<?php

route::post ( '/', function ( )
{
    input::set ( 'completeBy', strtotime ( input::get ( 'completeBy', date ( 'Y-m-d' ) ) ) );
    return app::fulfill ( 'i want to add a new goal' );
} );