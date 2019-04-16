<?php

route::get ( '/', function ( )
{
    view::title ( 'Overview' );
    return app::fulfill ( 'i want to see my goals' );
} );