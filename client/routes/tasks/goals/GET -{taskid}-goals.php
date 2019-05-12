<?php

route::get ( '/{taskid}/goals', function ( )
{
    return app::fulfill ( 'i want to see a task\'s goals' );
} );