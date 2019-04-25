<?php

use function compact as with;


route::get ( '/{goalid}', function ( )
{
    return app::fulfill ( 'i want to see a goal' );
} );