<?php

route::get ( '/{id}/tasks/add', function ( $id )
{
    view::title ( 'Add goal task' );
    return view::ok ( 'tasks.add', [ 'goal' => $id ] );
} );