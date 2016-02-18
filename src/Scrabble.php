<?php
    class Scrabble {

        function calcScore($word) {
            $letters_array = str_split($word);
            $word_score = 0;
            foreach ($letters_array as $letter) {
                if (preg_match("/[aeioulnrst]/i", $letter)) {
                    $word_score += 1;
                } elseif (preg_match("/[dg]/i", $letter)) {
                    $word_score += 2;
                } elseif (preg_match("/[bcmp]/i", $letter)) {
                    $word_score += 3;
                } elseif (preg_match("/[fhvwy]/i", $letter)) {
                    $word_score += 4;
                } elseif (preg_match("/[k]/i", $letter)) {
                    $word_score += 5;
                } elseif (preg_match("/[jx]/i", $letter)) {
                    $word_score += 8;
                } elseif (preg_match("/[qz]/i", $letter)) {
                    $word_score += 10;
                } else {
                    $word_score += 0;
                }
            }
            return $word_score;
        }
    }

?>
