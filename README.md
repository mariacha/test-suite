Current tests:

```
cd web/core
../../vendor/bin/phpunit ../modules/contrib/scanner/tests/src/Functional/SearchTest.php
```

or
```
cd web
php ./core/scripts/run-tests.sh --url http://web.test-suite.localhost --class '\Drupal\Tests\scanner\Functional\SearchTest'
```

You must disable xdebug by setting xdebug.mode = off to get this to work (by default it's xdebug.mode = develop)

TODO: push up this change

`$user = $this->createUser(['administer nodes','perform search and replace']);`

to

https://www.drupal.org/project/scanner/issues/3214129#comment-14120991
