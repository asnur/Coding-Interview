<?php

class Anagram
{
    public function cek(string $word_1, string $word_2)
    {
        if (count_chars($word_1, 1) == count_chars($word_2, 1)) {
            echo "Anagram\n";
        } else {
            echo "Not Anagram\n";
        }
    }
}

$Anagram = new Anagram();
echo $Anagram->cek("friend", "finder");
