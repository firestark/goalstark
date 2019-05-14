<?php

route::get ( '/{taskid}/+1', function ( )
{
    return app::fulfill ( 'i want to add +1 to a task' );
} );