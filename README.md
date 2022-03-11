
** NOTE: This repo is not used for the MMEX HomeSite, it was considered but we adopted a static website rather than PHP **

# MoneyManagerEx Home Site

This is the README.md file for the MoneyManagerEx home site web page.

## Setup Details

### Prerequisites

- Apache 2 webserver
- PHP version 7.3 or newer is required (note: PHP8 has not been full tested), with the *intl* extension and *mbstring* extension installed.
- No database is currently used

For further information see: https://codeigniter.com/user_guide/intro/requirements.html

### Based on the following

- [CodeIgniter](https://codeigniter.com/)  4.1.6
- [BootStrap](https://github.com/twbs/bootstrap) 5.1.3
- [Font Awesome](https://github.com/FortAwesome/Font-Awesome) 5.15.4
- [Modern Business Theme Template](https://startbootstrap.com/template-overviews/modern-business) v5.0.5 
- [PHP markdown Library](https://github.com/michelf/php-markdown) 1.9.1

## Installation

### Apache 2 setup

1. Download the software into your project directory, this will setup CodeIgniter, Bootstrap, Font Awesome, and the theme.

    > $ git clone --recursive https://github.com/moneymanagerex/mmex.web.git

2. Ensure that the 'writeable' folder is writeable by the webserver, see: https://codeigniter.com/user_guide/installation/running.html#initial-configuration-set-up

3. Further Apache considerations can be found here: https://codeigniter.com/user_guide/installation/running.html#hosting-with-apache

4. Install the PHP markdown library

    > $ composer require michelf/php-markdown

For further  information see: https://codeigniter.com/user_guide/installation/installing_manual.html

5. Once setup and tested ensure that the .env file is setup for production - see: https://codeigniter.com/user_guide/general/environments.html. By default, no .env file is present. this is a safety feature to keep the site a bit more secure in case settings are messed up once it is live. Copy the env file to .env and open it up.

This file is used to contain server-specific settings. This means you never will need to commit any sensitive information to your version control system. It includes some of the most common ones you want to enter already, though they are all commented out. So uncomment the line with CI_ENVIRONMENT on it, and change production to development:

    > #CI_ENVIRONMENT = development

This will allow CodeIgnitor to report errors to you as you test your code. 

## Site Structure

### /app

Main config and application code is stored and managed here, key items of note:

#### Config

- app/Config/MMEX.php - Application config

#### Controllers

- app/Controllers/Download.php - Used to serve the data under the About menu.
- app/Controllers/Features.php - Used to serve the data under the Features menu.
- app/Controllers/Home.php - Used to serve data under the Home/index.php menu
- app/Controllers/News.php - Used to serve data under the News menu.

#### Views

- about/md - Markdown files hosting the about pages
- downloads/index.php - View files for the download pages
- features/md - Markdown files hosting the feature descriptions
- news/md/*.md - Markdown fules hosting the news articles
- news/md/*.php - Metadata for the news articles
- templates/*.php - Common header, navigation, and footer views
- homepage.php - View file for the Home/index.php

### /public

This contains css files and images. 

### /system

Files here should not be edited, the main CodeIgniter code is stored here.

### /vendor

Files here should not be edited, the installed PHP Mrkdown code is stored here.

### /writeable

Files here should not be edited, this is used written to by the application for caching data.
