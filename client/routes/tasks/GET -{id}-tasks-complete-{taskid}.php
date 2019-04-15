<?php

route::get ( '/{id}/tasks/complete/{taskid}', function ( )
{
    return app::fulfill ( 'i want to complete a task' );
} );