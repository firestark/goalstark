<?php

use function compact as with;

route::get ( '/{goalid}/tasks/{taskid}/remove', function ( $goalid, $taskid )
{
    return app::fulfill ( 'i want to remove a task', with ( 'taskid' ) );
} );