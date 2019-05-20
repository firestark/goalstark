<?php

route::get ( '/{scheme_id}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a scheme' );
} );