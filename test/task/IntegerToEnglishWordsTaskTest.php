<?php

namespace appTest\task;

use app\task\integerToEnglishWords\IntegerToEnglishWords;

class IntegerToEnglishWordsTaskTest extends \PHPUnit\Framework\TestCase
{
    public function testDecision()
    {
        $t = new IntegerToEnglishWords(300);
        $this->assertEquals($t->decision(), "three hundred");

    }

}