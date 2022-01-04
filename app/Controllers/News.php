<?php

namespace App\Controllers;

use Michelf\Markdown;

class News extends BaseController
{
    public function index()
    {
        $this->showHeader("News");

        $mdPath = APPPATH.'Views/news/md/';

        $mmexConfig = config('MMEX');

        // Grab the list of posts
        helper('filesystem');
        $postList = array();
        $posts = get_filenames($mdPath, true);
        rsort($posts);
        foreach ($posts as $postFile) {
            $file_parts = pathinfo($postFile);
            if (!strcmp($file_parts['extension'],'php'))
                $postList[] = include($postFile);
        }
        $data['newsPosts'] = $postList;
        echo view('news/index', $data);

        $this->showFooter();
    }

    public function view($newsItem)
    { 
        $mdPath = APPPATH.'Views/news/md/';

        // Grab the list of posts
        helper('filesystem');
        $postList = array();
        $thisPost = "";
        $posts = get_filenames($mdPath, true);
        rsort($posts);
        foreach ($posts as $postFile) {
            $file_parts = pathinfo($postFile);
            if (!strcmp($file_parts['extension'],'php')) {
                $postData = include($postFile);
                $postList[] = $postData;
                if (!strcmp($newsItem, $postData['slug']))
                    $thisPost = $postData;
            }
        }

        if (empty($thisPost)) {
            // Whoops, we don't have a news item for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($newsItem);
        }   

        $this->showHeader("News: ". ucfirst($newsItem));

        $mmexConfig = config('MMEX');

        $data['newsPosts'] = $postList;
        $data['thisPost'] = $thisPost;
        
        echo view('news/_header', $data);     

        // Grab and process the markdown
        $mdData = file_get_contents($mdPath.$thisPost['mdfile']);
        echo Markdown::defaultTransform($mdData);

        echo view('news/_footer');   

        $appConfig = config('App');
        // https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/guides/web-intent
        $data['twitter'] = "https://twitter.com/intent/tweet?".urlencode("text=".$mmexConfig->siteName.": ".$thisPost['title'].
                            "&url=".$appConfig->baseURL."news/view/".$thisPost['slug']);
        echo view('news/_social', $data);          

        $this->showFooter();
    }
}