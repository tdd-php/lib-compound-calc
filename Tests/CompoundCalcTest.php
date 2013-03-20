<?php

namespace Gajdaw\TddExamples\CompoundCalc\Tests;

use Gajdaw\TddExamples\CompoundCalc\CompoundCalc;

class CompoundCalcTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider getInversedAddData
     *
     */
    public function testInversedAdd($a, $b, $result)
    {
        $this->assertEquals($result, CompoundCalc::inversedAdd($a, $b));
    }

    public function getInversedAddData()
    {
        return array(
            array(0.5, 0.5, 1),
            array(1, 1, 0.5),
            array(2, 8, 0.1),
        );
    }

}
