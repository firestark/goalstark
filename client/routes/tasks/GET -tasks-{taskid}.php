<?php

route::get ( '/tasks/{taskid}', function ( )
{
    view::title ( 'Goal task' );
    return app::fulfill ( 'i want to see a task' );
} );