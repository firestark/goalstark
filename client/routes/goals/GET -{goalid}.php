<?php

use function compact as with;


route::get ( '/{goalid}', function ( )
{
    return app::pipe ( [ 
        'i want to see a goal',
        'i want to see my consumed protein for today'
    ] );
} );