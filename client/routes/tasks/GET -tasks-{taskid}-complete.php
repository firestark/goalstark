<?php

route::get ( '/tasks/{taskid}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a task' );
} );