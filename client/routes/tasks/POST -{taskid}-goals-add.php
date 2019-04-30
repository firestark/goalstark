<?php

use function compact as with;

route::post ( '/{taskid}/goals/add', function ( )
{
    $goals = input::get ( 'goals', [ ] );
    return app::fulfill ( 'i want to add goals to a task', with ( 'goals' ) );
} );