SnakeApp
========

SnakeApp is an inline-documented Speakap application, to play Snake in Speakap! It's basically a wrapper around the game JavaScript Snake By Patrick Gillespie (http://patorjk.com/games/snake).

SnakeApp is meant to be a very fast way to get started with the Speakap JavaScript proxy. It performs validation on the signed request, but no server-server interactions (yet).

An explanation of the files:

* snake.jpg - The image of a snake, this is shown in the menu on the left
* snake.php - The content being loaded in an iframe in Speakap
* js/speakap.js - The Speakap proxy, it's taken from the SDK: https://github.com/SpeakapBV/Speakap-SDK/blob/master/js/speakap.js
* manifest.json - The "app" metadata, see: http://developer.speakap.io/portal/tutorials/manifest.html
* composer.json - The library dependency metadata, for easy installation of the Speakap SDK via Composer (https://getcomposer.org/)

All remaining files are part of the Snake game and are not required for communication with Speakap.

More documentation can be found at: http://developer.speakap.io/portal/
