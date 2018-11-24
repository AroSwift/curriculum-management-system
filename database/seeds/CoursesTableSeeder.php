<?php

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;
use App\Course;

class coursesTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/raw_data/courses.csv';
        $this->tablename = 'coursesTableSeeder';
        $this->mapping = [ 'course_number', 'course_name', 'credit_hour', 'active' ];
    }

    public function run()
    {
        parent::run();
    }
}
