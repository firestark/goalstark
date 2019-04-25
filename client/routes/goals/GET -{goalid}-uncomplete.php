<?php

route::get ( '/{goalid}/uncomplete', function ( )
{
    return app::fulfill ( 'i want to uncomplete a goal' );
} );