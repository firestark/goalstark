<?php

route::get ( '/apps', function ( )
{
    return app::fulfill ( 'i want to see my apps' );
} );