<?php

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/csvs/courses.csv';
        $this->tablename = 'courses';
        $this->mapping = [ 'course_number', 'course_name', 'credit_hour', 'active' ];
        $this->defaults = [ 'major_id' => 1 ];
        $this->header = true;
        $this->delimiter = ',';
    }

    public function run() {
        parent::run();
    }
}
