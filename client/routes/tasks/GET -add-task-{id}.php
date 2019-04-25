<?php

route::get ( '/add/task/{id}', function ( $id )
{
    return redirect::to ( "/{$id}/tasks/add" );
} );