<?php

use function compact as with;

route::get ( '/{goalid}/tasks/{taskid}', function ( $goalid, $taskid )
{
    return app::fulfill ( 'i want to see a task', with ( 'taskid' ) );
} );