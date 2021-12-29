<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MMEX extends BaseConfig
{
    public $siteName = "MoneyManager Ex";
    public $siteHeadline = "Free, easy-to-use, personal finance software";
    public $siteSummary = "Open-source, cross-platform, software that helps you organize your finances and keep track of where, when and to who the money goes. It is also a great tool to get a bird's eye view of your financial worth.";
    public $siteCopyright = "&copy; 2014 - 2022 - Money Manager EX";

    public $releaseList = [
            [   'version' => "1.5.11",
                'Mac' => true,
                'Windows' => true,
                'Unix' => false
            ],
            [   'version' => "1.5.10",
                'Mac' => true,
                'Windows' => true,
                'Unix' => false
            ],
            [   'version' => "1.5.9",
                'Mac' => true,
                'Windows' => true,
                'Unix' => false
            ],
            [   'version' => "1.5.8",
                'Mac' => true,
                'Windows' => true,
                'Unix' => false
            ]     
        ];

    public $featureList = [
            [   'name' => 'accounts',
                'icon' => 'bi-wallet2',
                'title' => 'Accounts & Currencies',
                'text' => 'Wizard to simply create accounts and start to use MMEX. 
                            Multiple currencies for each account to have more flexibility.'
            ],
            [   'name' => 'transactions',
                'icon' => 'bi-card-list',
                'title' => 'Transactions',
                'text' => 'Take note of all expenses and incoming in a clear view: divide and highlight them with different status. 
                            Search, filter and sort by every field to have a clear situation of bank accounts at any time.'
            ],
            [   'name' => 'payees',
                'icon' => 'bi-person-square',
                'title' => 'Payees & Categories',
                'text' => 'Categories indicate the reason an expenditure is made or an income is received. 
                            Payees are the people or the institutions that give money or who are paid for goods and services.'
            ],
            [   'name' => 'repeating',
                'icon' => 'bi-arrow-repeat',
                'title' => 'Repeating Transactions',
                'text' => 'Special transactions set up in order to have the transaction entered into the database at some future date. 
                            They generally occur at regular intervals based on a schedule.'
            ],
            [   'name' => 'stocks',
                'icon' => 'bi-bank2',
                'title' => 'Stocks & Shares',
                'text' => 'Allows the tracking of Stocks and Shares to be incorporated with your general day to day transactions.'
            ],
            [   'name' => 'assets',
                'icon' => 'bi-house-door',
                'title' => 'Assets',
                'text' => 'Track fixed assets and incorporate them within total financial worth. 
                            Every single asset could be undervalued/increased by a specific rate per year or left unchanged.'
            ],
            [   'name' => 'budgeting',
                'icon' => 'bi-basket2',
                'title' => 'Budgeting',
                'text' => 'Set up a budget for a year and/or a month. Then compare money spent versus actual budget with specific or custom reports.'
            ],
            [   'name' => 'attachments',
                'icon' => 'bi-paperclip',
                'title' => 'Attachments',
                'text' => 'Store all related documents attaching all file types to every element type (transaction, account, asset etc..).
                            In this way it is possible to have always on hand invoices, receipts, contracts directly within MMEX.'
            ],
            [   'name' => 'generalreports',
                'icon' => 'bi-pie-chart',
                'title' => 'General Reports',
                'text' => 'Create your own reports with custom SQL queries, LUA functions and HTML + JS frontend. 
                            They will become available with standard reports and you can run them directly from report menu.'
            ],
            [   'name' => 'importexport',
                'icon' => 'bi-pie-chart',
                'title' => 'Import & Export',
                'text' => 'Import data from QIF (Quicken Interchange Format) and CSV (Comma-Separated Values) files. 
                            Export data to QIF, CSV and HTML.'
            ],
            [   'name' => 'multilanguage',
                'icon' => 'bi-translate',
                'title' => 'Multi-Language',
                'text' => 'More than 30 translations available that allow to have Money Manager EX interface in your native language. 
                            Documentation available in 8 different languages.'
            ],
            [   'name' => 'crossplatform',
                'icon' => 'bi-display',
                'title' => 'Cross Platform',
                'text' => 'We provide builds for the most common operating systems: Windows, MacOS and Linux Ubuntu. 
                            It is possible to use it also on other OS building it directly from source code.'
            ],
            [   'name' => 'android',
                'icon' => 'bi-phone',
                'title' => 'Android Version',
                'text' => 'Port of the PC application, it maintains the best features of the desktop application, 
                            while adding mobility and synchronization. It requires Android 2.2 (Froyo) or higher.'
            ],
            [   'name' => 'github',
                'icon' => 'bi-github',
                'title' => 'Free & Open Source',
                'text' => 'OpenSource software, free download without ads and charges. 
                            It can be freely used, changed, and shared by anyone.'
        ],

        ];
}