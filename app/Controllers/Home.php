<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->showHeader("Home Page");

        $mmexConfig = config('MMEX');
        $data['featureList'] = $mmexConfig->featureList;

        // Grab the last 6 forum posts

        $forumFeed = array();
        $forumRSS = file_get_contents($mmexConfig->forumRSS, 0, stream_context_create(["http"=>["timeout"=>5]]));
        if ($forumRSS != false)
        {
            $xml = new \SimpleXMLElement($forumRSS);
            $i = 1;
            foreach($xml->entry as $entry)
            {
                $forumFeed[] = [
                    'date' => $entry->updated,
                    'title' => $entry->title,
                    'content' => $entry->content,
                    'url' => $entry->id
                ];
                if (++$i > 8)
                    break;
            }
            }
            $data['forumFeed'] = $forumFeed;

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

        $this->showFooter();
    }
}
