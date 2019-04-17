<?php

use function compact as with;


route::get ( '/{id}', function ( )
{
    return app::fulfill ( 'i want to see a goal' );
} );