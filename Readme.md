# Learning PHPUnit

## Install project
``` 
git clone git@github.com:Ivanitch/learn-phpunit.git .
``` 
## Run project
``` 
// Install packeges
composer install

// Run server
make serve
```
## Run tests
```
// Run test
vendor/bin/phpunit
vendor/bin/phpunit tests/documentation
vendor/bin/phpunit tests/documentation/section2

vendor/bin/phpunit tests/calculator
vendor/bin/phpunit tests/assertions

// Or
composer test
composer test-docs
composer test-calc
composer test-docs-asserts
 ```

## Documentation
Official documentation: [https://phpunit.de/documentation.html](https://phpunit.de/documentation.html)  
Documentation in Russian: [https://phpunit.readthedocs.io/ru/latest/](https://phpunit.readthedocs.io/ru/latest/)