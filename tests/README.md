CodeIgniter Skeleton Unit Tests
====================

This is based on [CodeIgniter Unit Tests](https://github.com/EllisLab/CodeIgniter/tree/develop/tests). Please read their [README.md](https://github.com/EllisLab/CodeIgniter/blob/develop/tests/README.md) file first to get the main idea.

The test suites only cover all components that were created by this project, not for CodeIgniter framework or other open source projects. The below are list of all tested components:

* Addons ajax controller
* Bootstrap Dialog library
* Bootstrap form helpers
* MY_Controller controller
* Response library
* Template library

### Requirements:

PHPUnit >= 3.5.6
```
pear channel-discover pear.phpunit.de
pear channel-discover pear.symfony.com
pear install phpunit/PHPUnit
```

vfsStream
```
pear channel-discover pear.bovigo.org
pear install bovigo/vfsStream-beta
```

### Running the Unit Tests
```
phpunit --coverage-text --configuration tests/phpunit.xml
```