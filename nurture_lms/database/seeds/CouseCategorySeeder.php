<?php

use Illuminate\Database\Seeder;

class CouseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\models\CourseCategory::class, 10)->create();
    }
}
