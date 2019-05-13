<?php

route::post ( '/{goalid}/tasks/add', function ( $goalid )
{
    input::set ( 'goals', [ $goalid ] );
    return app::fulfill ( 'i want to add a task' );
} );