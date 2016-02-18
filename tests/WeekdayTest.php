<?php

    require_once "src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_find_day_of_week()
        {
            //Arrange
            $test_Weekday = new Weekday;
            $month = 2;
            $day = 18;
            $year = 2016;

            //Act
            $result = $test_Weekday->findDay($month, $day, $year);

            //Assert
            $this->assertEquals("Thursday", $result);
        }
    }

?>
