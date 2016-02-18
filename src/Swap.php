<?php
    /**
     *Find and replace
     **/
    class Swap
    {
        function replaceWords($phrase, $word_to_replace, $replacement)
        {
            $phrase = explode(' ', $phrase);
            foreach ($phrase as $i => $word) {
                $phrase[$i] = str_replace($word_to_replace, $replacement, $word);
            }
            $phrase = implode(' ', $phrase);
            return $phrase;
        }

        function replaceAnyMatch($phrase, $word_to_replace, $replacement)
        {
            return str_replace($word_to_replace, $replacement, $phrase);
        }
    }

?>
