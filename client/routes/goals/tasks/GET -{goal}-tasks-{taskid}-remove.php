<?php

use function compact as with;

route::get ( '/{goal}/tasks/{taskid}/remove', function ( $goal, $taskid )
{
    return app::fulfill ( 'i want to remove a task', with ( 'taskid' ) );
} );