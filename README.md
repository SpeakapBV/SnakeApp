SnakeApp
========

SnakeApp is an inline-documented Speakap application, to play Snake in Speakap! It's basically a wrapper around the game JavaScript Snake By Patrick Gillespie (http://patorjk.com/games/snake).

SnakeApp is meant to be a very fast way to get started with the Speakap JavaScript proxy. It performs validation on the signed request, but no server-server interactions (yet).

An explanation of the files:

* snake.jpg - The image of a snake, this is shown in the menu on the left
* snake.php - The content being loaded in an iframe in Speakap
* js/speakap.js - The Speakap proxy, it's taken from the SDK: https://github.com/SpeakapBV/Speakap-SDK/blob/master/js/speakap.js
* manifest.json - The "app" metadata, see: http://developer.speakap.io/configuring-manifest-json/
* composer.json - The library dependency metadata, for easy installation of the Speakap SDK via Composer (https://getcomposer.org/)

All remaining files are part of the Snake game and are not required for communication with Speakap.

More documentation can be found at: http://developer.speakap.io/


Installation
============

## Prerequisite
* It's an app written in PHP, so you'll need that. Version PHP 5.4.10 or greater
* A webserver. We recommend Nginx, but others will do fine.

## Installation steps
1. Obtain Composer, a great package manager for PHP libraries
2. Run composer and install the SnakeApp dependencies


### Obtain Composer
Visit: https://getcomposer.org/download/ and follow the instructions. If you don't want to install it globally. You can also download the composer.phar and execute it like so: `php composer.phar`

### Run Composer
If you installed composer (globally), do the following:

    composer install --no-dev

If you only downloaded the composer.phar, do the following:

    php composer.phar install --no-dev


*If you want to unit-tests and if you want to tinker with the code, you might want the development libraries, in that case simply ommit the "--no-dev" flag.*

If you didn't get any errors, installation is successful and you have all the code required to run the app.
