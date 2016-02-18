<?php
    /**
     *Rock Paper Scissor Game
     **/
    class Game
    {
        //Game
        function playGame($hand_one, $hand_two)
        {
            if($hand_one == $hand_two) {
                return 'Tie';
            }
            if($hand_one == 'rock') {
                if($hand_two == 'scissors') {
                    return 'Player 1';
                }
                return 'Player 2';
            }
        }

    }

?>
