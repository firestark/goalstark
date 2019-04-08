<?php


route::get ( '/add', function ( )
{
    view::title ( 'Add a new goal' );
    return view::ok ( 'add' );
} );