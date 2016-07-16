<?php

final class str_end_with_test extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider for_beTrue
     */
    public function test_beTrue($needle)
    {
        $this->assertTrue(str_end_with('123abcde456', $needle));
    }

    public function for_beTrue()
    {
        return array(
            array(''),
            array('6'),
            array('cde456'),
            array('abcde456'),
            array('123abcde456'),
            array(6),
            array(456),
            array(6.0),
            array(456.0),
        );
    }

    /**
     * @dataProvider for_beFalse
     */
    public function test_beFalse($needle)
    {
        $this->assertFalse(str_end_with('123abcde456', $needle));
    }

    public function for_beFalse()
    {
        return array(
            array('23'),
            array('23'),
            array('abc'),
            array('あいう'),
        );
    }
}
