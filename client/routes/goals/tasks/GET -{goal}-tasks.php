<?php

route::get ( '/{goal}/tasks', function ( )
{
    return app::pipe ( [ 
        'i want to see a goal\'s tasks',
        'i want to see my consumed protein for today'
    ] );
} );