<?php



namespace Database\Seeders;



use Illuminate\Database\Seeder;

use App\Models\Role;

use App\Models\User;

use Illuminate\Support\Facades\Hash;



class RoleAndUserSeeder extends Seeder

{

    public function run(): void

    {

        // 1️⃣ Create roles

        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $userRole  = Role::firstOrCreate(['name' => 'user']);



        // 2️⃣ Create Admin User

        $admin = User::firstOrCreate(

            ['email' => 'admin@example.com'],

            [

                'name' => 'Admin User',

                'password' => Hash::make('password123'), // Change in production

                'current_role' => 'admin',

            ]

        );



        // Assign Admin role

        if (!$admin->roles->contains($adminRole->id)) {

            $admin->roles()->attach($adminRole->id);

        }



        // 3️⃣ Create Normal User

        $user = User::firstOrCreate(

            ['email' => 'user@example.com'],

            [

                'name' => 'Normal User',

                'password' => Hash::make('password123'),

                'current_role' => 'user',

            ]

        );



        // Assign User role

        if (!$user->roles->contains($userRole->id)) {

            $user->roles()->attach($userRole->id);

        }



        $this->command->info('Roles and users seeded successfully!');

    }

}
