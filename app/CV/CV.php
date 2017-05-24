<?php


namespace App\CV;
use App\Experience;

class CV
{
    public $about;
    public $experiences;
    public $education = [
        [
            'institution' => 'Manchester University',
            'courses' => ['Physics with Technological Physics']
        ],
        [
            'institution' => 'Headlands School and Community Science College',
            'courses' => [
                'A Levels: Physics, Maths, Music Technology',
                'GCSES: 11 A-B Grade including Maths, Science and English'
                ]
        ]
    ];

    public $skills = [
        'Familiar with most frontend javascript frameworks including AngularJS, Angular(2/4), VueJS and React',
        'Experience with Puppet, Jenkins and Bitbucket Pipelines',
        'Highly skilled with the linux commandline (Bash and ZSH)',
        'Advanced user of GIT',
        'Comfortable with AWS and related cloud based technologies including Microsoft Azure',
        'Some knowledge of IIS and Microsoft Windows Server',
        'Experience with Gulp, Grunt and Webpack'
    ];

    public $publications = [
        'Mastering Laravel. Packt Pub 2014. Technical Reviewer'
    ];

    public function __construct() {
        $this->about = $this->about();
        $this->experiences = Experience::all();
    }

    /**
     * Return the introduction about text.
     * @return string
     */
    public function about() {
        $aboutText = '<p>I am an experienced Acquia certified developer with over 10 years experience in PHP and Drupal. I have an eclectic range of skills but currently my main focus is on <strong>PHP</strong>, <strong>Laravel</strong> and <strong>Drupal</strong>. I currently am quite involved in DevOPs. I am a great team player but I also possess the ability to work well independently. I have been interested in IT and programming since childhood and it is something that I am truly passionate about. Linux and OS X are my primary operating systems of choice.</p>';
        return $aboutText;
    }

    public function experience() {
        return '';
    }

    public function qualifications() {
        return [
            [
                'company' => 'Acquia',
                'description' => 'Acquia Certified Drupal Developer 2014'
            ]
        ];
    }
}