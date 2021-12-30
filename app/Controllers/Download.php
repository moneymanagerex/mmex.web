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

        // Fill-in standard URLs
        $releaseList = $mmexConfig->releaseList;
        $i = 0;
        foreach ($releaseList as $release) {
            foreach ($release['contents'] as $releaseBuild => $releaseURL) {
                if (empty($releaseURL)) {
                    $build = "";
                    switch ($releaseBuild) {
                        case "mac":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-Darwin.dmg";
                            break;
                        case "win64":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win64.exe";
                            break;
                        case "win32":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win32.exe";
                            break;
                        case "win64port":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win64-portable.zip";
                            break;
                        case "win32port":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win32-portable.zip";
                            break;
                    }
                    $releaseList[$i]['contents'][$releaseBuild] = $build;
                }
            }
            $i++;
        };

        $downloads = array(); 
        $latestRelease = $releaseList[0];
        $latestVersion = $latestRelease['version'];
        $agent = $this->request->getUserAgent();
        $platformVersion = $agent->getPlatform();
        if (!strcmp($platformVersion,"Mac OS X")) {
            $osVersion = "Mac";
            $button = [ 
                'name' => "$osVersion (v$latestVersion)",
                'link' => $latestRelease['contents']['mac']
            ];
            $downloads[] = $button;
        } else if (!strcmp($platformVersion,"Windows 7")
                || !strcmp($platformVersion,"Windows 8")
                || !strcmp($platformVersion,"Windows 8.1")
                || !strcmp($platformVersion,"Windows 10")) {
            $osVersion = "Windows";
            $button = [ 
                'name' => "$osVersion 64-bit (v$latestVersion)",
                'link' => $latestRelease['contents']['win64']
            ];
            $downloads[] = $button;
            $button = [ 
                'name' => "$osVersion 32-bit (v$latestVersion)",
                'link' => $latestRelease['contents']['win32']
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
                'name' => "Unknown (Select from builds below)",
                'link' => ""
            ];
            $downloads[] = $button;
        }

        $data['latestVersion'] = $latestVersion;
        $data['platformVersion'] = $platformVersion;
        $data['platformType'] = $osVersion;
        $data['downloads'] = $downloads;
        $data['releaseNames'] = $mmexConfig->releaseNames;
        $data['releaseList'] = $releaseList;

        echo view('templates/header', $data);
        echo view('templates/navigation', $data);
        echo view('downloads/index', $data);
        echo view('templates/footer', $data);
    }

}