<?php

use function compact as with;

route::get ( '/{goal}/tasks/{task}/uncomplete', function ( )
{
    return app::fulfill ( 'i want to uncomplete a task' );
} );