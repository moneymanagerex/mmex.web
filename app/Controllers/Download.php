<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Download extends Controller
{
    public function index()
    {
        $data['title'] = "Downloads";

        $mmexConfig = config('MMEX');
        $data['siteName'] = $mmexConfig->siteName;
        $data['siteHeadline'] = $mmexConfig->siteHeadline;
        $data['siteSummary'] = $mmexConfig->siteSummary;
        $data['siteCopyright'] = $mmexConfig->siteCopyright;

        $downloads = array(); 
        $latestVersion = $mmexConfig->releaseList[0]['version'];
        $agent = $this->request->getUserAgent();
        $platformVersion = $agent->getPlatform();
        if (!strcmp($platformVersion,"Mac OS X")) {
            $osVersion = "Mac";
            $button = [ 
                'name' => "$osVersion (v$latestVersion)",
                'link' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v$latestVersion/mmex-$latestVersion-Darwin.dmg"
            ];
            $downloads[] = $button;
        } else if (!strcmp($platformVersion,"Windows 7")
                || !strcmp($platformVersion,"Windows 8")
                || !strcmp($platformVersion,"Windows 8.1")
                || !strcmp($platformVersion,"Windows 10")) {
            $osVersion = "Windows";
            $button = [ 
                'name' => "$osVersion 64-bit (v$latestVersion)",
                'link' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v$latestVersion/mmex-$latestVersion-win64.exe"
            ];
            $downloads[] = $button;
            $button = [ 
                'name' => "$osVersion 32-bit (v$latestVersion)",
                'link' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v$latestVersion/mmex-$latestVersion-win32.exe"
            ];
            $downloads[] = $button;
        } else if (!strcmp($platformVersion,"Linux")
                || !strcmp($platformVersion,"Debian")
                || !strcmp($platformVersion,"GNU/Linux")
                || !strcmp($platformVersion,"Unknown Unix OS")) {
            $osVersion = "Linux";
            $button = [ 
                'name' => "$osVersion (Select from Linux builds below)",
                'link' => ""
            ];
            $downloads[] = $button;
        } else {
            $osVersion = "";
            $button = [ 
                'name' => "Unknown (Select from builds Below)",
                'link' => ""
            ];
            $downloads[] = $button;
        }

        $data['platformVersion'] = $platformVersion;
        $data['platformType'] = $osVersion;
        $data['downloads'] = $downloads;

        echo view('templates/header', $data);
        echo view('templates/navigation', $data);
        echo view('downloads/index', $data);
        echo view('templates/footer', $data);
    }

}