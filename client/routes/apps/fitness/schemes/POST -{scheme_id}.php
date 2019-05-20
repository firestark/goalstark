<?php

route::post ( '/fitness/{scheme_id}', function ( )
{
    return app::fulfill ( 'i want to update a scheme' );
} );