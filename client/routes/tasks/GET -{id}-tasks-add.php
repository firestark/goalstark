<?php

route::get ( '/{id}/tasks/add', function ( $id )
{
    return view::ok ( 'tasks.add', [ 'goal' => $id ] );
} );