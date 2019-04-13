<?php

use function compact as with;

route::get ( '/{id}/tasks', function ( )
{
    view::title ( 'Goal tasks' );
    return app::fulfill ( 'i want to see a goal' );
} );