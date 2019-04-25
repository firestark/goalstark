<?php

route::get ( '/tasks/{taskid}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a task' );
} );