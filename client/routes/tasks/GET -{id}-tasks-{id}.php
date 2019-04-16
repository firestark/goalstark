<?php

route::get ( '/{id}/tasks/{taskid}', function ( $id, $taskid )
{
    return app::fulfill ( 'i want to see a task' );
} );