<?php

use PHPUnit\Framework\TestCase;

use function src\reverseString;

class ReverseStringTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once './src/ReverseString.php';
    }

    public function testEmptyString(): void
    {
        $this->assertEquals("", reverseString(""));
    }

    public function testStringWithOneCharacter(): void
    {
        $this->assertEquals("a", reverseString("a"));
    }

    public function testStringWithTwoCharacters(): void
    {
        $this->assertEquals("ba", reverseString("ab"));
    }

    public function testStringWithThreeCharacters(): void
    {
        $this->assertEquals("cba", reverseString("abc"));
    }

    public function testStringWithFourCharacters(): void
    {
        $this->assertEquals("dcba", reverseString("abcd"));
    }

    public function testStringWithFiveCharacters(): void
    {
        $this->assertEquals("edcba", reverseString("abcde"));
    }

    public function testStringRobot(): void
    {
        $this->assertEquals("toboR", reverseString("Robot"));
    }
}
