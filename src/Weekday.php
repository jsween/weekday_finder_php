<?php
    class Weekday
    {
        function findDay($month, $day, $year) {
            return date('l' , mktime(0 , 0 , 0 , $month , $day , $year ));
        }
    }

?>
