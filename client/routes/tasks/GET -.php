<?php

route::get ( '/', function ( )
{
    return app::pipe ( [ 
        'i want to see my tasks',
        'i want to see my consumed protein for today'
    ] );
} );