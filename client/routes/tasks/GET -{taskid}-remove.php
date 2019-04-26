<?php

route::get ( '/{taskid}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a task' );
} );