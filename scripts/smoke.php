<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;

$u = User::create(['name'=>'Smoke Tester','email'=>'smoke+2@example.com','password'=>Hash::make('password')]);
$p = UserProfile::create(['user_id'=>$u->id,'full_name'=>'Smoke Tester','phone_number'=>'+15551230001','address'=>'Smoke St','user_type'=>'service_seeker']);

echo 'SMOKE: created user ' . $u->id . ' profile ' . $p->id . PHP_EOL;
