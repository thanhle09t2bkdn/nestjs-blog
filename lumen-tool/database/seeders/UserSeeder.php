<?php


namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => app('hash')->make('t0ny@2022'),
            'role' => User::ADMIN_ROLE,
        ]);
        User::factory()
            ->count(20)
            ->create();
    }
}
