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
            'end_date' => new DateTime('2017-06-30'),
            'description' => 'Initially brought in for a six week contract I was tasked with creating the backend for a e-commerce healthcare website. After completing that I moved on to lead the development on numerous websites utilising various toolsets such as Drupal, Wordpress, Laravel, NodeJS and even .NET (Sitefinity). In addition to development I also set up their linux infrastructure and implemented version control and continuous integration using both Jenkins and later Bitbucket pipelines.'
        ]);

        Experience::create([
            'title' => 'TalkTalk',
            'start_date' => new DateTime('2012-09-11'),
            'end_date' => new DateTime('2014-12-01'),
            'description' => 'Originally starting as a short term contractor I was taken on a permanent basis. I created and led the Drupal team at TalkTalk Technology, creating high traffic solutions to be used both in house and externally. In this role I hired and trained staff, implemented process and liased across the large business to create cost-effective and viable business application solutions using open source technologies.'
        ]);

        Experience::create([
            'title' => 'Drutek',
            'start_date' => new DateTime('2012-06-01'),
            'description' => 'In this position as Director I work on many small projects for SMEs, people in the media and politics. I was responsible for managing a varied client portfolio, all Drupal development and maintenance of servers.'
        ]);

        Experience::create([
            'title' => 'CoyleDesign',
            'start_date' => new DateTime('2010-02-01'),
            'end_date' => new DateTime('2012-06-01'),
            'description' => '<p>Straight after leaving university and in the height of the global financial crisis I set up CoyleDesign. Starting with a small client base initially it soon grew into a thriving company that was providing services to celebrities and people in politics.</p><p>As managing director I was responsible completely for the welfare and success of the business. In addition to doing the initial development work I was also tasked with marketing and promotion for the business to ensure that it was profitable</p>'
        ]);
    }
}
