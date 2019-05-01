<?php


route::get ( '/add', function ( )
{
    view::title ( 'Add goal' );
    return view::ok ( 'goals.add' );
} );