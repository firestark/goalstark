<?php

route::post ( '/{goal}/tasks/add', function ( )
{
    return app::fulfill ( 'i want to add a task' );
} );