<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class FileExtensionsTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/FILE_EXTENSION.csv';
        $this->tablename = 'file_extensions';
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
