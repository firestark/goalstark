<?php

route::get ( '/remove/{taskid}/{goalid}', function ( )
{
    return app::fulfill ( 'i want to remove a goal from a task' );
} );