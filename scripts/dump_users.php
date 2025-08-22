<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$status = $kernel->handle(new Symfony\Component\Console\Input\ArgvInput, new Symfony\Component\Console\Output\NullOutput);

$users = App\Models\User::with('profile')->latest()->take(10)->get();
foreach ($users as $u) {
    echo "ID: {$u->id} | Name: {$u->name} | Email: {$u->email} | PasswordHash: " . substr($u->password,0,10) . "...\n";
    $p = $u->profile;
    if ($p) {
        echo "   Profile -> phone: {$p->phone_number} | address: {$p->address} | user_type: {$p->user_type}\n";
    } else {
        echo "   No profile\n";
    }
}
