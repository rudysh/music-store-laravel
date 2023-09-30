<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Curso de Guitarra',
            'description' => 'En nuestro curso de guitarra, aprenderás una amplia variedad de habilidades y conocimientos que te permitirán convertirte en un guitarrista talentoso y versáti',
            "img"=>"images/courses/te.jpeg",
        ]);

        Course::create([
            'name' => 'Curso de Solfeo',
            'description' => 'En nuestro curso de solfeo, aprenderás fundamentos musicales esenciales que te permitirán leer, escribir y comprender la notación musical.',
            'img' => 'images/courses/solfeo.jpg',
        ]);

        Course::create([
            'name' => 'Curso de Canto',
            'description' => 'En nuestro curso de canto, aprenderás una amplia variedad de técnicas y habilidades que te ayudarán a desarrollar y mejorar tu voz. convertirte en un cantante seguro ',
            'img' => 'images/courses/canto.jpg',
        ]);

        Course::create([
            'name' => 'Curso de Bateria',
            'description' => 'En nuestro curso de batería, aprenderás una amplia gama de técnicas y habilidades que te permitirán convertirte en un baterista talentoso y versátil.',
            'img' => 'images/courses/bateria.jpg',
        ]);

    }
}
