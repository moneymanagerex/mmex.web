<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MMEX extends BaseConfig
{
    public $siteName = "MoneyManager Ex";
    public $siteHeadline = "Free, easy-to-use, personal finance software";
    public $siteSummary = "Open-source, cross-platform, software that helps you organize your finances and keep track of where, when and to who the money goes. It is also a great tool to get a bird's eye view of your financial worth.";
    public $siteCopyright = "&copy; 2014 - 2022 - Money Manager EX";

    public $forumRSS = "https://forum.moneymanagerex.org/app.php/feed";

    public $releaseNames = [
        'win64' => "Windows (64-bit)",
        'win32' => "Windows (32-bit)",
        'mac' => "MacOS (Universal)",
        'win64-port' => "Windows (64-bit) Portable",
        'win32-port' => "Windows (32-bit) Portable",
        'linux-rhel8' => "Red Hat Enterprise Linux 8",
        'linux-buster' => "Debian 10 (64-bit)",
        'linux-stretch' => "Debian 9 (64-bit)",
        'linux-jessie' => "Debian 8 (64-bit)",
        'linux-groovy' => "Ubuntu 20.10 (64-bit)",
        'linux-focal' => "Ubuntu 20.04 (64-bit)",
        'linux-bionic' => "Ubuntu 18.04 (64-bit)",
        'linux-xenial' => "Ubuntu 16.04 (64-bit)",
        'linux-tara' => "Linux Mint 19 (64-bit)",
        'linux-tessa' => "Linux Mint 19.1 (64-bit)",
        'linux-sylvia' => "Linux Mint 18.3 (64-bit)",
        'linux-fedora' => "Linux Fedora (32/64-bit)",
        'linux-suse42' => "OpenSUSE 42 (32/64-bit)",
        'linux-leap' => "OpenSUSE Leap 15.3 (32/64-bit)"
    ];

    // Empty build URLS imply that the Build controller can calculate these
    public $releaseList = [
        [   'version' => "1.5.13",
            'date' => "6th February 2022",
            'contents' => [
            'mac' => "",
            'win32' => "",
            'win64' => "",
            'win32-port' => "",
            'win64-port' => ""
        ]
    ],
    [   'version' => "1.5.12",
            'date' => "30th January 2022",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => "",
                'linux-bionic' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.12/mmex_1.5.12-1.bionic_amd64.deb",
                'linux-leap' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.12/mmex-1.5.12-1-leap15.2.x86_64.rpm"
            ]
        ],
        [   'version' => "1.5.11",
            'date' => "7th December 2021",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.10",
            'date' => "23rd November 2021",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.9",
            'date' => "31st October 2021",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.8",
            'date' => "2nd October 2021",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.7",
            'date' => "18th September 2021",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.6",
            'date' => "20th August 2021",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.5",
            'date' => "31st July 2021",
            'contents' => [
                'mac' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.5/mmex-1.5.5-Darwin-2021-07-31.dmg",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.4",
            'date' => "18th July 2021",
            'contents' => [
                'mac' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.4/mmex-1.5.4-Darwin-2021-07-18.dmg",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => ""
            ]
        ],
        [   'version' => "1.5.3",
            'date' => "13th June 2021",
            'contents' => [
                'mac' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.3/mmex-1.5.3-Darwin-2021-06-13.dmg",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => "",
                'linux-bionic' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.3/mmex_1.5.3-1.bionic_amd64.deb",
                'linux-tara' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.3/mmex_1.5.3-1.tara_amd64.deb",
                'linux-tessa' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.3/mmex_1.5.3-1.tessa_amd64.deb",
                'linux-fedora' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.3/mmex-1.5.3-1.fc30.x86_64.rpm"
            ]
        ],
        [   'version' => "1.5.2",
            'date' => "4th June 2021",
            'contents' => [
                'mac' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.2/mmex-1.5.2-Darwin-2021-06-04.dmg",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => "",
                'linux-groovy' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.2/mmex_1.5.2-1.groovy_amd64.deb",
                'linux-sylvia' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.2/mmex_1.5.2-1.sylvia_amd64.deb",
                'linux-xenial' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.2/mmex_1.5.2-1.xenial_amd64.deb",
                'linux-fedora' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.2/mmex-1.5.2-1.fc30.x86_64.rpm"
            ]
        ],
        [   'version' => "1.5.1",
            'date' => "24th April 2021",
            'contents' => [
                'mac' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex-1.5.1-macos.dmg",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => "",
                'linux-bionic' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex_1.5.1-1.bionic_amd64.deb",
                'linux-buster' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex_1.5.1-1.buster_amd64.deb",
                'linux-focal' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex_1.5.1-1.focal_amd64.deb",
                'linux-groovy' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex_1.5.1-1.groovy_amd64.deb",
                'linux-tara' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex_1.5.1-1.tara_amd64.deb",
                'linux-tessa' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex_1.5.1-1.tessa_amd64.deb",
                'linux-fedora' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex-1.5.1-1.fc30.x86_64.rpm",
                'linux-rhel8' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.1/mmex-1.5.1-1.el8.x86_64.rpm"
            ]
        ],
        [   'version' => "1.5.0",
            'date' => "11th April 2021",
            'contents' => [
                'mac' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex.v1.5.0-macOS.2020.04.12.dmg",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => "",
                'linux-bionic' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.bionic_amd64.deb",
                'linux-buster' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.buster_amd64.deb",
                'linux-focal' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.focal_amd64.deb",
                'linux-groovy' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.groovy_amd64.deb",
                'linux-sylvia' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.sylvia_amd64.deb",
                'linux-tara' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.tara_amd64.deb",
                'linux-tessa' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.tessa_amd64.deb",
                'linux-xenial' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex_1.5.0-1.xenial_amd64.deb",
                'linux-fedora' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex-1.5.0-1.fc30.x86_64.rpm",
                'linux-rhel8' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.5.0/mmex-1.5.0-1.el8.x86_64.rpm"
            ]
        ],
        [   'version' => "1.3.6",
            'date' => "24th December 2020",
            'contents' => [
                'mac' => "",
                'win32' => "",
                'win64' => "",
                'win32-port' => "",
                'win64-port' => "",
                'linux-bionic' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.bionic_amd64.deb",
                'linux-jessie' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.jessie_amd64.deb",
                'linux-stretch' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.stretch_amd64.deb",
                'linux-suse42' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex-1.3.6-1.opensuse42.2-x86_64.rpm",
                'linux-sylvia' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.sylvia_amd64.deb",
                'linux-tara' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.tara_amd64.deb",
                'linux-tessa' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.tessa_amd64.deb",
                'linux-xenial' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex_1.3.6-1.xenial_amd64.deb",
                'linux-fedora' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex-1.3.6-1.fc30.x86_64.rpm",
                'linux-rhel8' => "https://github.com/moneymanagerex/moneymanagerex/releases/download/v1.3.6/mmex-1.3.6-1.el8.x86_64.rpm"
            ]
         ]
    ];

    public $featureList = [
        [   'name' => 'accounts',
            'icon' => 'fas fa-money-check',
            'title' => 'Accounts & Currencies',
            'text' => 'Wizard to simply create accounts and start to use MMEX. 
                        Multiple currencies for each account to have more flexibility.'
        ],
        [   'name' => 'transactions',
            'icon' => 'fas fa-exchange-alt',
            'title' => 'Transactions',
            'text' => 'Take note of all expenses and incoming in a clear view: divide and highlight them with different status. 
                        Search, filter and sort by every field to have a clear situation of bank accounts at any time.'
        ],
        [   'name' => 'payees',
            'icon' => 'fas fa-user-tag',
            'title' => 'Payees & Categories',
            'text' => 'Categories indicate the reason an expenditure is made or an income is received. 
                        Payees are the people or the institutions that give money or who are paid for goods and services.'
        ],
        [   'name' => 'repeating',
            'icon' => 'fas fa-redo-alt',
            'title' => 'Repeating Transactions',
            'text' => 'Special transactions set up in order to have the transaction entered into the database at some future date. 
                        They generally occur at regular intervals based on a schedule.'
        ],
        [   'name' => 'stocks',
            'icon' => 'fas fa-chart-line',
            'title' => 'Stocks & Shares',
            'text' => 'Allows the tracking of Stocks and Shares to be incorporated with your general day to day transactions.'
        ],
        [   'name' => 'assets',
            'icon' => 'fas fa-house-user',
            'title' => 'Assets',
            'text' => 'Track fixed assets and incorporate them within total financial worth. 
                        Every single asset could be undervalued/increased by a specific rate per year or left unchanged.'
        ],
        [   'name' => 'budgeting',
            'icon' => 'fas fa-shopping-basket',
            'title' => 'Budgeting',
            'text' => 'Set up a budget for a year and/or a month. Then compare money spent versus actual budget with specific or custom reports.'
        ],
        [   'name' => 'attachments',
            'icon' => 'fas fa-paperclip',
            'title' => 'Attachments',
            'text' => 'Store all related documents attaching all file types to every element type (transaction, account, asset etc..).
                        In this way it is possible to have always on hand invoices, receipts, contracts directly within MMEX.'
        ],
        [   'name' => 'generalreports',
            'icon' => 'fas fa-chart-pie',
            'title' => 'General Reports',
            'text' => 'Create your own reports with custom SQL queries, LUA functions and HTML + JS frontend. 
                        They will become available with standard reports and you can run them directly from report menu.'
        ],
        [   'name' => 'importexport',
            'icon' => 'fas fa-file-import',
            'title' => 'Import & Export',
            'text' => 'Import data from QIF (Quicken Interchange Format) and CSV (Comma-Separated Values) files. 
                        Export data to QIF, CSV and HTML.'
        ],
        [   'name' => 'multilanguage',
            'icon' => 'fas fa-language',
            'title' => 'Multi-Language',
            'text' => 'More than 30 translations available that allow to have Money Manager EX interface in your native language. 
                        Documentation available in 8 different languages.'
        ],
        [   'name' => 'crossplatform',
            'icon' => 'fas fa-desktop',
            'title' => 'Cross Platform',
            'text' => 'We provide builds for the most common operating systems: Windows, MacOS and Linux Ubuntu. 
                        It is possible to use it also on other OS building it directly from source code.'
        ],
        [   'name' => 'android',
            'icon' => 'fab fa-android',
            'title' => 'Android Version',
            'text' => 'Port of the PC application, it maintains the best features of the desktop application, 
                        while adding mobility and synchronization. It requires Android 2.2 (Froyo) or higher.'
        ],
        [   'name' => 'github',
            'icon' => 'fab fa-github',
            'title' => 'Free & Open Source',
            'text' => 'OpenSource software, free download without ads and charges. 
                        It can be freely used, changed, and shared by anyone.'
        ]
    ];

}