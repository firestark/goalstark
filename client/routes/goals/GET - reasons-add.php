<?php

use function compact as with;

route::get ( '/{goalid}/reasons/add', function ( $goalid )
{
    return view::ok ( 'goals.reasons.add', with ( 'goalid' ) );
} );