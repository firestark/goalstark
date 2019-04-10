<?php

route::get ( '/login', function ( )
{
    return view::ok ( 'login' );
} );