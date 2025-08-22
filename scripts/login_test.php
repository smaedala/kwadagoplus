<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$status = $kernel->handle(new Symfony\Component\Console\Input\ArgvInput, new Symfony\Component\Console\Output\NullOutput);

// Attempt to authenticate using phone number
$phone = '+234 801 234 5678';
$password = 'Password123!';

$request = Illuminate\Http\Request::create('/login', 'POST', [
    'email' => $phone,
    'password' => $password,
]);

$loginRequest = new App\Http\Requests\Auth\LoginRequest();
// Bind the request data
$loginRequest->initialize($request->query->all(), $request->request->all(), $request->attributes->all(), $request->cookies->all(), $request->files->all(), $request->server->all(), $request->getContent());

try {
    $loginRequest->setContainer($app);
    $loginRequest->validateResolved();
    $loginRequest->authenticate();
    echo "Authentication succeeded\n";
} catch (Exception $e) {
    echo "Authentication failed: " . $e->getMessage() . "\n";
}
