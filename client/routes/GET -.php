<?php

route::get ( '/', function ( )
{
    view::title ( 'My goals' );
    return app::fulfill ( 'i want to see my goals' );
} );