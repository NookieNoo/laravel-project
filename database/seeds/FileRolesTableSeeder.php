<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class FileRolesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/FILE_ROLE.csv';
        $this->tablename = 'file_roles';
        $this->truncate = false;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        parent::run();
    }
}
