<?php

use function compact as with;

route::get ( '/{goalid}/reasons/{reasonid}', function ( $goalid, $reasonid )
{
    $goal = app::make ( goal\manager::class )->find ( $goalid );
    $reason = $goal->reasons [ $reasonid ];

    return view::ok ( 'goals.reasons.edit', with ( 'goalid', 'reason' ) );
} );