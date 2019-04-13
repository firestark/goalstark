<?php

route::post ( '/{id}/tasks', function ( )
{
    return app::fulfill ( 'i want to add a task' );
} );