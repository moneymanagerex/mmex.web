<?php

namespace App\Controllers;

use Michelf\Markdown;

class Features extends BaseController
{
    public function index()
    {
        $this->view();
    }

    public function view($page = 'accounts')
    {
        $mdFile = APPPATH.'Views/features/md/'.$page.'.md';

        if (! is_file($mdFile)) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = "Features: ". ucfirst($page);

        $mmexConfig = config('MMEX');
        $data['siteName'] = $mmexConfig->siteName;
        $data['siteHeadline'] = $mmexConfig->siteHeadline;
        $data['siteSummary'] = $mmexConfig->siteSummary;
        $data['siteCopyright'] = $mmexConfig->siteCopyright;

        echo view('templates/header', $data);
        echo view('templates/navigation', $data);

        // Find which feature it is
        foreach($mmexConfig->featureList as $feature)
            if (!strcmp($page, $feature['name']))
                break;      
        $data['feature'] = $feature;
        $data['featureList'] = $mmexConfig->featureList;

        echo view('features/_header', $data);     

        // Grab and process the markdown
        $mdData = file_get_contents($mdFile);
        echo Markdown::defaultTransform($mdData);

        // If any images are present then display them
        helper('filesystem');
        $imageLoc = "/images/features/".$page;
        $allFiles = get_filenames(FCPATH.$imageLoc);
        $imageList = array();
        foreach ($allFiles as $file)
            if (preg_match("/\.(png|gif|jpe?g|bmp)/i",$file))
                $imageList[] = $imageLoc.'/'.$file;
        if (count($imageList) > 0)
        {
            $data['imageList'] = $imageList;
            echo view('features/_images', $data);       
        }

        echo view('features/_footer');   

        echo view('templates/footer', $data);
    }
}
