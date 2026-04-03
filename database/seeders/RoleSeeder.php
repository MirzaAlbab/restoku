<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles =
        [
            [ 'role_name' => 'Admin', 'description' => 'Administrator with full access to the system' ],
            [ 'role_name' => 'Cashier', 'description' => 'Cashier responsible for handling transactions and customer interactions' ],
            [ 'role_name' => 'Chef', 'description' => 'Chef responsible for preparing and cooking food orders' ],
            [ 'role_name' => 'Customer', 'description' => 'Customer who can place orders and interact with the restaurant' ]
        ];
        DB::table('roles')->insert($roles);
    }
}
