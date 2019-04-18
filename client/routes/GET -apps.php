<?php

route::get ( '/apps', function ( )
{
    view::title ( 'Overview' );
    return view::ok ( 'apps.list' );
} );