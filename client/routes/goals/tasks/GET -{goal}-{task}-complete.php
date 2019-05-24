<?php

use function compact as with;

route::get ( '/{goal}/tasks/{task}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a task' );
} );