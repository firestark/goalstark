<?php

use function compact as with;

route::get ( '/{goal}/tasks/{task}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a task' );
} );