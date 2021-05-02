<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AttributesTableSeeder::class);
        $this->call(FileExtensionsTableSeeder::class);
        $this->call(FileRolesTableSeeder::class);
        $this->call(SourcesTableSeeder::class);

    }
}
