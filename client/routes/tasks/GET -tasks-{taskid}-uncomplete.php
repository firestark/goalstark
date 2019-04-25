<?php

route::get ( '/tasks/{taskid}/uncomplete', function ( )
{
    return app::fulfill ( 'i want to uncomplete a task' );
} );