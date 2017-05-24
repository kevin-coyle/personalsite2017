<?php


namespace App\CV;


class CV
{
    public $about;
    public function __construct() {
        $this->about = $this->about();
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
}