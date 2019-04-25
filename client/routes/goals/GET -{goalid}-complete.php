<?php

route::get ( '/{goalid}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a goal' );
} );