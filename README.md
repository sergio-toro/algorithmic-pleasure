Algorithmic pleasure
====================

Sergio Toro Algorithmic pleasure test.

### Set up project
```bash
curl -sS https://getcomposer.org/installer | php
composer.phar update
```

### Run algorithms
```bash
# Algorithm A:
./console.php storo:sum-multiples
./console.php storo:sum-multiples-extra

# Algorithm B:
./console.php storo:number-pow 5 3

```

### Run tests
```bash
./vendor/phpunit/phpunit/phpunit -c app/
```