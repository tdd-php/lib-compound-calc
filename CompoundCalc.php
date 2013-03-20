<?php

/**
 * CompoundCalc library
 *
 * This file is part of the TDD PHP project:
 *
 *     https://github.com/tdd-php
 *
 * (c)2013 Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Gajdaw\TddExamples\CompoundCalc;

use Gajdaw\TddExamples\SimpleCalc\SimpleCalc;


/**
 * CompoundCalc performs some math operations using SimpleCalc.
 *
 * @package PHPTDD
 * @author  Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 */
class CompoundCalc
{

    /**
     * Inverse of add() by SimpleMath
     *
     * @param mixed $a First number (integer of float)
     * @param mixed $b Second number (integer of float)
     *
     * @return mixed The inverse of SimpleMath::add()
     */
    public static function inversedAdd($a, $b)
    {
        return 1 / SimpleCalc::add($a, $b);
    }

}
