<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_calcScore_a()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "a";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_calcScore_aeioulnrst()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "aeioulnrst";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(10, $result);
        }
        function test_calcScore_g()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "g";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(2, $result);
        }
        function test_calcScore_dog()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "dog";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(5, $result);
        }
        function test_calcScore_b()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "b";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(3, $result);
        }
        function test_calcScore_y()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "y";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(4, $result);
        }
        function test_calcScore_k()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "k";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(5, $result);
        }
        function test_calcScore_jx()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "jx";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(16, $result);
        }
        function test_calcScore_quiz()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "quiz";

            //Act
            $result = $test_Scrabble->calcScore($user_word);

            //Assert
            $this->assertEquals(22, $result);
        }
    }

?>
