<?php

route::get ( '/add/task', function ( )
{
    view::title ( 'Select task type' );
    return view::ok ( 'tasks.type' );
    // view::title ( 'Select a goal' );
    // return app::fulfill ( 'i want to select a goal' );
} );