<?php

route::get ( '/tasks/{taskid}', function ( )
{
    return app::fulfill ( 'i want to see a task' );
} );