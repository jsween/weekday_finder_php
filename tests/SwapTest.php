<?php

    require_once "src/Swap.php";

    class SwapTest extends PHPUnit_Framework_TestCase
    {
        function test_one_match()
        {
            //Arrange
            $test_Swap = new Swap;
            $phrase = "the cat in the hat";
            $word_to_replace = "cat";
            $replacement = "bat";

            //Act
            $result = $test_Swap->replaceWords($phrase, $word_to_replace, $replacement);

            //Assert
            $this->assertEquals("the bat in the hat", $result);
        }
        function test_two_matches()
        {
            //Arrange
            $test_Swap = new Swap;
            $phrase = "the cat in the hat saw another cat";
            $word_to_replace = "cat";
            $replacement = "bat";

            //Act
            $result = $test_Swap->replaceWords($phrase, $word_to_replace, $replacement);

            //Assert
            $this->assertEquals("the bat in the hat saw another bat", $result);
        }
        function test_three_matches()
        {
            //Arrange
            $test_Swap = new Swap;
            $phrase = "the cat in the hat saw another cat";
            $word_to_replace = "cat";
            $replacement = "bat";

            //Act
            $result = $test_Swap->replaceWords($phrase, $word_to_replace, $replacement);

            //Assert
            $this->assertEquals("the bat in the hat saw another bat", $result);
        }
    }

?>
