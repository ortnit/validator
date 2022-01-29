![workflow badge](https://github.com/ortnit/php-example/actions/workflows/php.yml/badge.svg)

# Readme

Docker Image with ubuntu 20.04
uses php backport

composer2 installed

working dir /app mounted into docker image

uses PHP 8.1
uses PHPUnit 9+
uses PHPStan
PHPLint
PHP Codesniffer

## Composer
to use composer you can just use the following command
```
docker-compose run app composer <commands>
```

## PHPUnit
to launch phpunit just run
```
docker-compose run app run-scripts test
```