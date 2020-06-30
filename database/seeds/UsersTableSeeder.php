<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $caissierRole = Role::where('name', 'caissier')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $caissier = User::create([
            'name' => 'caissier',
            'email' => 'caissier@caissier.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $caissier->roles()->attach($caissierRole);
    }
}
