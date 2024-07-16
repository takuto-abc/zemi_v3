<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(['name' => '田口先生', 'major' => 'ものづくり、SDGs', 'interests' => '日本酒', 'hobby' => '', 'zipcode' => '大阪']);
        Student::create(['name' => 'takutosan', 'major' => 'IT', 'interests' => '海外サッカー', 'hobby' => 'プログラミング', 'zipcode' => '福岡']);
        Student::create(['name' => 'ふうか', 'major' => 'マーケティング', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'ありさ', 'major' => 'マーケティング', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'ゆきと', 'major' => 'フランチャイズ', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'おおしま', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'しんご', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'あおと', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'いつき', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'しょうま', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'せいご', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'はるか', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'まう', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'まゆ', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'みずき', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
        Student::create(['name' => 'かな', 'major' => '', 'interests' => '', 'hobby' => '', 'zipcode' => '']);
    }
}
