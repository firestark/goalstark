<?php


route::get ( '/add', function ( )
{
    return view::ok ( 'goals.add' );
} );