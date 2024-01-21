# Mixed Vinyl
Sing-a-long with SymfonyCasts' "Harmonious Development with Symfony 6" project
(ref: https://symfonycasts.com/screencast/symfony)

## Lesson 1) Hello Symfony
```shell
$> symfony check:req
$> symfony new mixed_vinyl
$> symfony new mixed_vinyl --webapp
$> symfony server:ca:install
$> syfmony serve -d
```
* confirm system meets requirements for running Symfony
* generate base project files
* generate and install CA certificate
* run Symfony's local development web server


## Lesson 2) Meet our Tiny App
Overview of directory structure:
* /public/: all publicly-accessible files, particularly the front controller index.php
* /config/: all config files
* /src/: PHP classes

Symfony itself "lives" in the /vendor/ directory, as it is a set of Composer dependency packages.

Also installed Symfony plugin for PHPStorm.


## Lesson 3) Routes, Controllers & Responses
* Controllers live in /src/Controller directory in App\Controller namespace
* Routes configured as annotation in the controller class, above route handler 
* Route handler returns Response object
 

## Lesson 4) Wildcard Routes
* Wildcards indicated in route with placeholder name in curly braces
* Auto passes parameter to route handler with same name as placeholder
* Specifying default value of null for parameter makes wildcard optional


## Lesson 5) Symfony Flex: Aliases, Packs & Recipes
Flex is short-cut package:
* aliases provide common-sense alias for Composer packages
* packs specify sub-dependencies, which flex can install
* recipes are package-specific commands executed when installing that package 
`$> composer require templates`

## Lesson 6) Flex Recipes
symfony/flex checks for recipes when composer install is run and executes any it finds.
Recipes live in github. manifest.json controls the recipe.  
List the recipes that have been executed:
`$> composer recipes`

## Lesson 7) Twig
Controllers do not a base class, but extending from AbstractContoller adds convenience functions.
`render()` convention: template directory with same name as the controller; template with the same name as the controller function.

Twig syntax: 
* "Say Something": `{{ variable }}` or `{{ function() }}`
* "Do Something" : `{% %}`
* "Comment": {# #}


## Lesson 8) Twig Inheritance
Extending base template via blocks
