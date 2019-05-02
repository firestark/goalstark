<?php

route::get ( '/register', function ( )
{
    return view::ok ( 'login-register' );
} );