<?php

route::post ( '/{goalid}/reasons/{reasonid}', function ( )
{
    return app::fulfill ( 'i want to update a goal\'s reason' );
} );