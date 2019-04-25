<?php

route::get ( '/{goalid}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a goal' );
} );