<?php

route::get ( '/{id}/tasks/uncomplete/{taskid}', function ( )
{
    return app::fulfill ( 'i want to uncomplete a task' );
} );