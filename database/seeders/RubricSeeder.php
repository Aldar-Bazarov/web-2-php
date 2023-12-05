<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rubric;

class RubricSeeder extends Seeder
{
    public function run()
    {
        Rubric::create(['rubric_name' => 'Искусственный интеллект']);
        Rubric::create(['rubric_name' => 'Искусственная нейронная сеть']);
        Rubric::create(['rubric_name' => 'Распознавание образов']);
        Rubric::create(['rubric_name' => 'Робототехника']);
        Rubric::create(['rubric_name' => 'Информационное общество']);
        Rubric::create(['rubric_name' => 'Автоматическая обработка текста']);
    }
}

