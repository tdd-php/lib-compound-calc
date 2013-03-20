<?php

spl_autoload_register(function ($class) {

    /*
     * Load the file 'CompoundCalc.php', when necessary.
     */
    if ($class === 'Gajdaw\TddExamples\CompoundCalc\CompoundCalc') {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'CompoundCalc.php';
    }

    /*
     * Load the file 'SimpleCalc.php', when necessary.
     */
    if ($class === 'Gajdaw\TddExamples\SimpleCalc\SimpleCalc') {
        require_once
            __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
            'vendor/tdd-php/lib-simple-calc/Gajdaw/TddExamples/SimpleCalc/SimpleCalc.php';
    }

});
