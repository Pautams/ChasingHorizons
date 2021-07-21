<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $staffRole = Role::where('name', 'staff')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $staff = User::create([
            'name' => 'Staff',
            'email' => 'staff@staff.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $staff->roles()->attach($staffRole);
    }
}
