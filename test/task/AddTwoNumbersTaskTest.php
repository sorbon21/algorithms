<?php

namespace appTest\task;

use app\task\addTwoNumbers\AddTwoNumbers;

class AddTwoNumbersTaskTest extends \PHPUnit\Framework\TestCase
{
    public function testDecision()
    {
        $t = new AddTwoNumbers(38);
        $this->assertEquals($t->decision(), 2);

    }

}