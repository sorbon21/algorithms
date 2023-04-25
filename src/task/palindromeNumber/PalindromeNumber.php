<?php

namespace app\task\palindromeNumber;

use app\task\Task;

class PalindromeNumber implements Task
{
    private $x;

    /**
     * @param Integer $x
     */
    public function __construct(int $x)
    {
        $this->x = $x;
    }

    private function isPalindrome($x)
    {
        $x = (string)$x;
        $size = strlen($x);
        if ($size <= 1) {
            return true;
        } else {
            if ($x[0] === $x[$size - 1]) {
                return $this->isPalindrome((int)substr($x, 1, $size - 2));
            }
            return false;
        }

    }

    public function decision()
    {
        return $this->isPalindrome($this->x);
    }
}