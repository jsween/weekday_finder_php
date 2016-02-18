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
        function test_scissors_scissors()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "scissors";
            $second_input = "scissors";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Tie", $result);
        }
        function test_scissors_paper()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_scissors_rock()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_paper_paper()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "paper";
            $second_input = "paper";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Tie", $result);
        }
        function test_paper_rock()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_paper_scissors()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_computer_random()
        {
            //Arrange
            $test_Game = new Game;
            $first_input = "rock";
            $second_input = "Computer";

            //Act
            $result = $test_Game->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }

?>
