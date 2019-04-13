<?php

route::get ( '/{id}/tasks/remove/{taskid}', function ( )
{
    return app::fulfill ( 'i want to remove a task' );
} );