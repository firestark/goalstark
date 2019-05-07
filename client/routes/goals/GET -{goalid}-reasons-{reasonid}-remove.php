<?php

route::get ( '/{goalid}/reasons/{reasonid}/remove', function ( )
{
    return app::fulfill ( 'i want to remove a reason from a goal' );
} );