<?php

//use PHPUnit\Framework\TestCase;

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}