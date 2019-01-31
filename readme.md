[![Build Status](https://travis-ci.org/Dazzle-App/Audience.png?branch=master)](https://travis-ci.org/Dazzle-App/Audience)
[![Build Status](https://travis-ci.org/Dazzle-App/Audience.png?branch=dev)](https://travis-ci.org/Dazzle-App/Audience)

# Installation

1. `composer require dazzle-app/audience`. (Auto-Discovery will handle ServiceProvider and Facades)
2. Publish config with `php artisan vendor:publish` and choose Dazzle-App/Audience in the list.
3. Update Config that should be in `/config/dazzle-audience.php`
4. `php artisan migrate`
5. Add the form to a view with `@audienceForm`
6. Promote your landing page (and this package if you feel like it).

# Development Installation

> This is mostly if you are interested in contributing, this is a suggested way to set up your development environment. 

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
        "url": "./../packages/audience"
    }
],

```

Once you have added/updated the above. Run `composer install` in the **application** folder in a terminal.

# Testing

This repo is intended to be fully tested. If you have the repo installed locally, as in the development installation instructions above, navigate to the folder on your machine, and run `composer test` or `composer test-coverage` to run the entire test suite.

> Note: run tests in the **package** folder, not from the **application** root, and not in the `vendor` directory either.