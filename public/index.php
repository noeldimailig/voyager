<?php

////////////////////////////////////////////
//
//  VOYAGER FRAMEWORK
//  ----------------------------------------
//  https://github.com/voyager-php/voyager
//
////////////////////////////////////////////
//
//  Version: v1.0.6
//  Author: James Crisostomo
//  Email: nerdlabenterprise@gmail.com
//
////////////////////////////////////////////

// Include composer autoload mechanism to
// import third party modules and libraries.
// If composer is not available, use the
// native autoload mechanism.

if(file_exists(__DIR__.'/../vendor/autoload.php'))
{
    require __DIR__.'/../vendor/autoload.php';
}
else
{
    $root = '../';

    require __DIR__ . '/../autoload.php';
}

// Initiate application and return instance
// object. All processes will be happening
// here.

$app = Voyager\Core\Application::init();

// Start application by starting the runtime
// and loading all initial configuration either
// in cache or fresh from the file itself.

$app->start();

// Terminate application.

$app->end();