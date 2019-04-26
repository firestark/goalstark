<?php

route::get ( '/food-tracker/remove/{consumationid}', function ( )
{
    return app::fulfill ( 'i want to remove a consumation' );
} );