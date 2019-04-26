<?php

route::get ( '/{taskid}', function ( )
{
    return app::fulfill ( 'i want to see a task' );
} );