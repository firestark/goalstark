<?php

route::get ( '/apps', function ( )
{
    return view::ok ( 'apps.list' );
} );