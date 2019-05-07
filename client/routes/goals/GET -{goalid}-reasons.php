<?php

route::get ( '/{goalid}/reasons', function ( )
{
    return app::fulfill ( 'i want to see my goal\'s reasons' );
} );