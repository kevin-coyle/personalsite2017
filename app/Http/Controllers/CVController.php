<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CV\CV;

class CVController extends Controller
{
    protected $cv;

    public function __construct() {
        $this->cv = new CV();
    }
    public function show() {
        return view('cv')->with(['cv' => $this->cv]);
    }
}
