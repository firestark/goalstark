<?php

route::get ( '/tasks/remove/{taskid}', function ( )
{
    return app::fulfill ( 'i want to remove a task' );
} );