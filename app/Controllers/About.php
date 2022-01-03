<?php

namespace App\Controllers;

use Michelf\Markdown;

class About extends BaseController
{
    function displayMD($title, $description, $markdown)
    {
        $mdPath = APPPATH.'Views/about/md/'.$markdown;
        $data['title'] = $title;
        $data['description'] = $description;

        $mmexConfig = config('MMEX');
        $data['siteName'] = $mmexConfig->siteName;
        $data['siteHeadline'] = $mmexConfig->siteHeadline;
        $data['siteSummary'] = $mmexConfig->siteSummary;
        $data['siteCopyright'] = $mmexConfig->siteCopyright;

        echo view('templates/header', $data);
        echo view('templates/navigation', $data);

        echo view('about/_header', $data);     
        // Grab and process the markdown
        $mdData = file_get_contents($mdPath);
        echo Markdown::defaultTransform($mdData);  
        echo view('about/_footer', $data);          

        echo view('templates/footer', $data);
    }

    public function index()
    {
    }

    public function contributors()
    { 
        $this->displayMD('<i class="fas fa-theater-masks"></i>&nbsp;Contributors',
                    "The following individuals and organisations are contributing to the project",
                    "contributors.md"
        );
    }

    public function privacy()
    { 
        $this->displayMD('<i class="fas fa-user-shield"></i>&nbsp; Privacy Policy',
                    "Please read the privacy policy applicable to this site",
                    "privacy.md"
        );
    }

    
    public function license()
    { 
        $this->displayMD('<i class="fas fa-id-badge"></i>&nbsp; License',
                    "The following license conditions apply to the software",
                    "license.md"
        );
    }

    public function press()
    { 
        $this->displayMD('<i class="fas fa-award"></i></i>&nbsp; Press Reviews',
                    "Reviews of the software across the Internet press",
                    "press.md"
        );
    }
}