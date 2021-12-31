<?php

namespace App\Controllers;

use Michelf\Markdown;

class About extends BaseController
{
    public function index()
    {
    }

    public function contributors()
    { 
        $filePath = APPPATH.'Views/about/md/contributors.md';

        $data['title'] = "Contributors";

        $mmexConfig = config('MMEX');
        $data['siteName'] = $mmexConfig->siteName;
        $data['siteHeadline'] = $mmexConfig->siteHeadline;
        $data['siteSummary'] = $mmexConfig->siteSummary;
        $data['siteCopyright'] = $mmexConfig->siteCopyright;

        echo view('templates/header', $data);
        echo view('templates/navigation', $data);

        echo view('about/_header', $data);     
        // Grab and process the markdown
        $mdData = file_get_contents($filePath);
        echo Markdown::defaultTransform($mdData);  
        echo view('about/_footer', $data);          

        echo view('templates/footer', $data);
    }
}