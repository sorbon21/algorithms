<?php

namespace appTest\task;

use app\task\intToRoman\IntToRoman;

class IntToRomanTaskTest extends \PHPUnit\Framework\TestCase
{
    public function testDecision()
    {
        $t = new IntToRoman(1994);
        $this->assertEquals($t->decision(),"MCMXCIV");

    }

}