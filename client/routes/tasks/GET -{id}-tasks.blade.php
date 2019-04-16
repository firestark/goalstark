<?php

route::get ( '/{id}/tasks', function ( )
{
    return app::fulfill ( 'i want to see a goal\'s tasks' );
} );