<?php

use function compact as with;

route::get ( '/add/task/{id}/type', function ( $id )
{
    view::title ( 'Select task type' );
    return view::ok ( 'tasks.type', with ( 'id' ) );
} );