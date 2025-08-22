<?php
// One-off script to test registration via the RegisteredUserController without needing CSRF.
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$status = $kernel->handle(new Symfony\Component\Console\Input\ArgvInput, new Symfony\Component\Console\Output\NullOutput);

// Create a fake request and call the controller
$request = Illuminate\Http\Request::create('/register', 'POST', [
    'name' => 'Test User ' . time(),
    'email' => '',
    'phone' => '+234 801 234 5678',
    'password' => 'Password123!',
    'password_confirmation' => 'Password123!',
    'user_type' => 'service_seeker',
]);

$controller = new App\Http\Controllers\Auth\RegisteredUserController();
$response = $controller->store($request);

echo "Response: ";
if ($response instanceof Illuminate\Http\RedirectResponse) {
    echo "Redirect to: " . $response->getTargetUrl() . PHP_EOL;
} else {
    var_dump($response);
}

// show last inserted user
$u = App\Models\User::latest()->first();
if ($u) {
    echo "Created user ID: {$u->id}, email: {$u->email}, name: {$u->name}\n";
    $p = App\Models\UserProfile::where('user_id', $u->id)->first();
    if ($p) echo "UserProfile: phone={$p->phone_number}, user_type={$p->user_type}, address={$p->address}\n";
}
