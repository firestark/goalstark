<?php

use Jenssegers\Blade\Blade;

require __DIR__ . '/vendor/autoload.php';

$app = new firestark\app;
$app->instance ( 'app', $app );
$app->instance ( 'session', new firestark\session );
$app->instance ( 'statuses', new firestark\statuses );
$app->instance ( 'request', firestark\request::capture ( ) );
$app->instance ( 'response', new http\response\factory ( firestark\response::class ) );
$app->instance ( 'jsonresponse', new http\response\factory ( firestark\jsonresponse::class ) );
$app->instance ( 'redirector', new firestark\redirector ( 'http://goalstark', $app [ 'session' ]->get ( 'uri', '/' ) ) );
$app->instance ( 'router', new firestark\router );
$app->instance ( 'view', 
    new firestark\view ( 
        $app [ 'response' ], 
        new Blade ( __DIR__ . '/views', __DIR__ . '/storage/cache/blade' ) 
    ) 
);

$app [ 'session' ]->flash ( 'uri', $app [ 'request' ]->uri );

facade::setFacadeApplication ( $app );

require ( __DIR__ . '/routes/routes.php' );
requiring ( __DIR__ . '/bindings' );
requiring ( __DIR__ . '/statuses' );
requiring ( __DIR__ . '/../app/procedures' );

$dispatcher = new http\dispatcher ( $app [ 'router' ]->routes, $app [ 'router' ]->groups );
$kernel = new firestark\kernel ( $dispatcher );
$response = $kernel->handle ( $app [ 'request' ] );

$response->send ( );