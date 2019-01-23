<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(constacl_single_users_seeder::class);
         $this->call(constacl_single_config_seeder::class);
    }
}
