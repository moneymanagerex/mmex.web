<?php

namespace App\Controllers;

class Download extends BaseController
{
    public function index()
    {
        $this->showHeader("Downloads");

        $mmexConfig = config('MMEX');

        // Fill-in standard URLs
        $releaseList = $mmexConfig->releaseList;
        $i = 0;
        foreach ($releaseList as $release) 
        {
            foreach ($release['contents'] as $releaseBuild => $releaseURL) 
            {
                if (empty($releaseURL)) 
                {
                    $build = "";
                    switch ($releaseBuild) 
                    {
                        case "mac":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-Darwin.dmg";
                            break;
                        case "win64":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win64.exe";
                            break;
                        case "win32":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win32.exe";
                            break;
                        case "win64-port":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win64-portable.zip";
                            break;
                        case "win32-port":
                            $build = "https://github.com/moneymanagerex/moneymanagerex/releases/download/v${release['version']}/mmex-${release['version']}-win32-portable.zip";
                            break;
                    }
                    $releaseList[$i]['contents'][$releaseBuild] = $build;
                }
            }
            $i++;
        };

        $latestRelease = $releaseList[0];

        // Determine the platform the user is using
        $osName = "";
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($agent,"Win"))
            if (strpos($agent,"x64"))
                $osName = "win64";
            else
                $osName = "win32";
        if (strpos($agent,"Mac")) $osName = "mac";
        if (strpos($agent,"Linux")) $osName = "linux";   
        if (strpos($agent,"Android")) $osName = "android";
        if (strpos($agent,"like Mac")) $osName = "ios"; 

        // Find the applicable recommended builds for download
        $downloads = array(); 
        foreach($latestRelease['contents'] as $releaseBuild => $releaseURL)  
        {            
            $releaseNameSplit = explode('-',$releaseBuild);         
            if (!strcmp($osName,$releaseNameSplit[0]))
            {
                $button = [ 
                    'name' => $mmexConfig->releaseNames[$releaseBuild],
                    'link' => $releaseURL
                ];
                $downloads[] = $button;
            }
        }
    
        // If nothing found for the platform then just add an 'unknown' button
        if (empty($downloads))
        {
            $button = [ 
                'name' => "Sorry, Platform Not Identified",
                'link' => "#"
            ];
            $downloads[] = $button;
        }

        $data['downloads'] = $downloads;
        $data['releaseNames'] = $mmexConfig->releaseNames;
        $data['releaseList'] = $releaseList;
        $data['latestVersion'] = $latestRelease['version'];

        echo view('downloads/index', $data);

        $this->showFooter("Downloads");
    }

}