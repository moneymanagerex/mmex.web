<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Home Page";

        $mmexConfig = config('MMEX');
        $data['siteName'] = $mmexConfig->siteName;
        $data['siteHeadline'] = $mmexConfig->siteHeadline;
        $data['siteSummary'] = $mmexConfig->siteSummary;
        $data['siteCopyright'] = $mmexConfig->siteCopyright;

        echo view('templates/header', $data);
        echo view('templates/navigation', $data);

        $data['featureList'] = $mmexConfig->featureList;

        // Grab the latest 3 posts
        $mdPath = APPPATH.'Views/news/md/';
        helper('filesystem');
        $postList = array();
        $posts = get_filenames($mdPath, true);
        rsort($posts);
        foreach ($posts as $postFile) {
            $file_parts = pathinfo($postFile);
            if (!strcmp($file_parts['extension'],'php'))
                $postList[] = include($postFile);
            if (sizeof ($postList) == 3)
                break;
        }
        $data['newsPosts'] = $postList;
        echo view('homepage', $data);
        
        echo view('templates/footer', $data);
    }
}
