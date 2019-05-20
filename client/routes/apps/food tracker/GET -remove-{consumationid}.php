<?php

route::get ( '/remove/{consumationid}', function ( )
{
    return app::fulfill ( 'i want to remove a consumation' );
} );