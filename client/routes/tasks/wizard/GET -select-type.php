<?php

use function compact as with;

route::get ( '/select-type', function ( )
{
    view::title ( 'Select task type' );
    return view::ok ( 'tasks.wizard.select-type', [ 'payload' => http_build_query ( input::all ( ) ) ] );
} );