<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'administrador',
        ]);
        /**
         * Recomendable el de abajo
         */
        $role = Role::create([
            'name' => 'user',
        ]);
    }
}
