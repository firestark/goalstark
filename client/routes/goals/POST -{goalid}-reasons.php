<?php

use function compact as with;

route::post ( '/{goalid}/reasons', function ( )
{
    return app::fulfill ( 'i want to add a reason to my goal' );
} );