<?php
    /**
     *Rock Paper Scissor Game
     **/
    class Game
    {
        //playGame takes in the input hand 1 and 2
        function playGame($hand_one, $hand_two = 'Computer')
        {
            //computer
            if($hand_two == 'Computer') {
                $computer = rand(1,3);
                if($computer == 1) {
                    $hand_two = 'rock';
                } elseif ($computer == 2) {
                    $hand_two = 'scissors';
                } else {
                    $hand_two = 'paper';
                }
            }
            //game
            if($hand_one == $hand_two) {
                return 'Tie';
            }
            if($hand_one == 'rock') {
                if($hand_two == 'scissors') {
                    return 'Player 1';
                }
                return 'Player 2';
            } elseif($hand_one == 'scissors') {
                if($hand_two == 'paper') {
                    return 'Player 1';
                }
                return 'Player 2';
            } elseif($hand_one == 'paper') {
                if($hand_two == 'rock') {
                    return 'Player 1';
                }
                return 'Player 2';
            }
        }

    }

?>
