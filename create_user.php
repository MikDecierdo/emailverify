<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

$user = User::where('email', 'admin@admin.com')->first();
if ($user) {
    echo "User exists: " . $user->email . "\n";
} else {
    $user = User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('password')
    ]);
    echo "Created: " . $user->email . "\n";
}
