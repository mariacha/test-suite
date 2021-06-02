Current tests:

```
cd web/core
../../vendor/bin/phpunit modules/system/tests/src/Functional/Batch/PageTest.php
```

or
```
cd web
php ./core/scripts/run-tests.sh --url http://web.test-suite.localhost --class 'Drupal\Tests\system\Functional\Batch\PageTest'
http://web.test-suite.localhost
```

You must disable xdebug by setting xdebug.mode = off to get this to work (by default it's xdebug.mode = develop)
