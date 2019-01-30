[![Build Status](https://travis-ci.org/Dazzle-App/Audience.png?branch=master)](https://travis-ci.org/Dazzle-App/Audience)

# Installation

All you should need to do is `composer require dazzle-app/audience`.



# Development Installation

I generally like to have the project installed locally, and use Composer to reference my local copy of the package in a plain Laravel application. To do this you would install a Laravel application, then add the following to your composer.json file in the application folder:

```
"require": {
    // Truncated to relevant stuff
    "dazzle-app/audience": "*"
},
"repositories": [
    {
        "type": "path",
        // you can update this to the path to the package on your machine.
        "url": "./../packages/list"
    }
],

```

Once you have added/updated the above. Run `composer install` in the application folder in a terminal.


# Testing


This repo is intended to be fully tested. If you have the repo installed locally, as in the development installation instructions above, navigate to the folder on your machine, and run `composer test` or `composer test-coverage` to run the entire test suite.