<?php

use Illuminate\Database\Seeder;
use App\Experience;
class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'title' => 'Ashfield Healthcare',
            'start_date' => new DateTime('2013-11-01'),
            'description' => 'Ashfield Description'
        ]);

        Experience::create([
            'title' => 'TalkTalk',
            'start_date' => new DateTime('2012-09-11'),
            'end_date' => new DateTime('2014-12-01'),
            'description' => 'TalkTalk Description'
        ]);

        Experience::create([
            'title' => 'Drutek',
            'start_date' => new DateTime('2012-06-01'),
            'description' => 'Drutek Description'
        ]);

        Experience::create([
            'title' => 'CoyleDesign',
            'start_date' => new DateTime('2010-02-01'),
            'end_date' => new DateTime('2012-06-01'),
            'description' => 'CoyleDesign'
        ]);
    }
}
