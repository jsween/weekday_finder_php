<?php

    require_once "src/Game.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_rock_papers()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_rock_rock()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Tie", $result);
        }
    }

?>
