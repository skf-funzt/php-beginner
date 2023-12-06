<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// instantiate app
$app = AppFactory::create();

// Add error middleware
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Add a custom error handler that returns JSON
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->forceContentType('application/json');
$errorHandler->registerErrorRenderer('application/json', function ($request, $exception, $displayErrorDetails, $logErrors, $logErrorDetails) {
    $payload = [
        'error' => $exception->getMessage()
    ];

    $response = new Slim\Psr7\Response();
    $response->getBody()->write(json_encode($payload, JSON_UNESCAPED_UNICODE));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

// add th router middleware
$app->addRoutingMiddleware();

// Define app routes

// Load file contents
$app->get('/api/load/{file:.*}', function (Request $request, Response $response, $args) {
    $file = $args['file'];
    $path = __DIR__ . '/' . $file;
    $code = file_get_contents($path);
    $response->getBody()->write($code);
    return $response;
});

// Save file contents
$app->post('/api/save/{file:.*}', function (Request $request, Response $response, $args) {
    $file = $args['file'];
    $data = json_decode($request->getBody()->getContents(), true);
    $path = __DIR__ . '/' . $file;
    
    // Create the folders if they don't exist
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    // Write the file
    $result = file_put_contents($path, $data['code']);

    // Set the permissions to the file
    chmod($path, 0777);

    $response->getBody()->write((string)$result);
    return $response;
});
$app->get('/api/save', function (Request $request, Response $response, $args) {
    $file = 'test-file.php';
    $data = json_decode($request->getBody()->getContents(), true);
    $path = __DIR__ . '/' . $file;
    
    // Create the folders if they don't exist
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    // Write the file
    $result = file_put_contents($path, 'nonesense');

    // Set the permissions to the file
    chmod($path, 0777);

    $response->getBody()->write((string)$result);
    return $response;
});

// Get whoami
$app->get('/api/whoami', function (Request $request, Response $response, $args) {
    $result = shell_exec('whoami');
    $response->getBody()->write($result);
    return $response;
});

// Allow preflight requests for all routes
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

// allow CORS
$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

$app->run();
