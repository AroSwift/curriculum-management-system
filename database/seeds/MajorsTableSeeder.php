<?php

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;
use App\Major;

class MajorsTableSeeder extends CsvSeeder {

    public function __construct() {
        $this->file = '/database/seeds/csvs/major_codes.csv';
        $this->tablename = 'majors';
        $this->mapping = [ 'abbr', 'name' ];
        $this->delimiter = ',';
        $this->header = false;
    }

    public function run() {
        parent::run();
    }

}
