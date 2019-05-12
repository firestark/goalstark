<?php

route::get ( '/{goalid}/tasks/{taskid}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a task from a goal' );
} );