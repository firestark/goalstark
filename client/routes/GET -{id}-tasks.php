<?php

use function compact as with;

route::get ( '/{id}/tasks', function ( )
{
    view::title ( 'Tasks' );
    return app::fulfill ( 'i want to see a goal' );
} );