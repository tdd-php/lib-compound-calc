TDD PHP Example: CompoundCalc Library
=====================================

[![Build Status](https://secure.travis-ci.org/tdd-php/lib-compound-calc.png?branch=master)](http://travis-ci.org/tdd-php/lib-compound-calc)

Example application using `tdd-php/lib-compound-calc` library
is available at (https://github.com/tdd-php/app-compound-calc).

How to run tests?
-----------------

    phpunit
    phpunit  --coverage-html coverage/


How to generate zipped archive?
-------------------------------

    git archive --format=zip --output=../lib-compound-calc-master.zip HEAD


How to generate API documentation with PhpDocumentor?
-----------------------------------------------------

    pear

    (creates %PHP_PEAR_PHP_BIN%)

    phpdoc -d . -t docs -i Tests/*


How to test coding standards with PHPCS?
----------------------------------------

    phpcs  --standard=Symfony2 . --ignore=Tests --extensions=php --encoding=utf-8


    mkdir phpcs
    phpcs  --standard=Symfony2 . --ignore=Tests --extensions=php --encoding=utf-8 > phpcs/results.txt
