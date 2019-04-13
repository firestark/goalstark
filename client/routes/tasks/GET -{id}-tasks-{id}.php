<?php

route::get ( '{id}/tasks/{taskid}', function ( )
{
    return view::ok ( 'tasks/edit' );
} );