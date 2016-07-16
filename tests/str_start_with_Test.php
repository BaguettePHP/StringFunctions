<?php

final class str_start_with_test extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider for_beTrue
     */
    public function test_beTrue($needle)
    {
        $this->assertTrue(str_start_with('123abcde0', $needle));
    }

    public function for_beTrue()
    {
        return array(
            array(''),
            array('1'),
            array('123'),
            array('123abcde'),
            array('123abcde0'),
            array(123),
            array(123.0),
        );
    }

    /**
     * @dataProvider for_beFalse
     */
    public function test_beFalse($needle)
    {
        $this->assertFalse(str_start_with('123abcde0', $needle));
    }

    public function for_beFalse()
    {
        return array(
            array('23'),
            array('23'),
            array('abc'),
            array('cde'),
            array('あいう'),
        );
    }
}
