<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruncateTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('Set foreign_key_checks=0');
             DB::table('roles')->truncate();
             Role::truncate();
             DB::table('users')->truncate();
             User::truncate();
             DB::table('role_user')->truncate();
         DB::statement('Set foreign_key_checks=1');
    }
}
