<?php

use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Form Submit Route
$app->post('/save', function (Request $request, Response $response) {
    // Validate antispam
    // ... if the antispam field is not empty OR 4 seconds have not passed, it's a robot
    $now     = microtime(true);
    $param   = $request->getParsedBody(); // get form params
    $isRobot = $param['antispam'] != '' || ($now - $param['microtime']) < 4;

    if( $isRobot ) {
        $response->getBody()->write("invalid");
        return $response->withStatus(403); // Request not allowed
    }

    // Redirect after success....
    $response->getBody()->write("Success!");
    return $response->withStatus(200);
});


// Form Render Route
$app->get('/', function (Request $request, Response $response) {
    // Render template 
    $templates = new PhpRenderer('../template');

    return $templates->render($response, "form.php");
});