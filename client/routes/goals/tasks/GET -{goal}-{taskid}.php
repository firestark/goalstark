<?php

use function compact as with;

route::get ( '/{goal}/tasks/{taskid}', function ( $goal, $taskid )
{
    return app::fulfill ( 'i want to see a task', with ( 'taskid' ) );
} );