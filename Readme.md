# Learning PHPUnit

## Install project
``` 
git clone git@github.com:Ivanitch/learn-phpunit.git .
sh ./start.sh
``` 
## Install packages
``` 
composer install
```
## Tests config
``` 
composer test-config
```
## Run tests
```
### Run test
./vendor/bin/phpunit
./vendor/bin/phpunit tests/calculator
./vendor/bin/phpunit tests/documentation
./vendor/bin/phpunit tests/documentation/section2
./vendor/bin/phpunit tests/documentation/assertions
./vendor/bin/phpunit tests/course

### Or
composer test
composer test-docs
composer test-calc
composer test-docs-asserts
 ```

## Documentation
Official documentation: [https://phpunit.de/documentation.html](https://phpunit.de/documentation.html)  
Documentation in Russian: [https://phpunit.readthedocs.io/ru/latest/](https://phpunit.readthedocs.io/ru/latest/)