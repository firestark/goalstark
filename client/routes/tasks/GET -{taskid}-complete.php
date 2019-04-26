<?php

route::get ( '/{taskid}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a task' );
} );