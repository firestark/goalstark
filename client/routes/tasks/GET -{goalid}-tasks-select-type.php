<?php

use function compact as with;

route::get ( '/{goalid}/tasks/select-type', function ( $goalid )
{
    view::title ( 'Select task type' );
    return view::ok ( 'tasks.select-type', with ( 'goalid' ) );
} );