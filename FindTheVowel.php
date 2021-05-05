<?php

class FindTheVowel
{
    public function cek(string $value)
    {
        $vowels = ['a', 'i', 'u', 'e', 'o'];
        $lenght = strlen($value);
        $num = 0;
        for ($i = 0; $i < $lenght; $i++) {
            if (in_array($value[$i], $vowels)) {
                $num++;
            }
        }
        echo "Number Vowel = " . $num . "\n";
    }

    public function simple_vowel(string $value)
    {
        $num = preg_match_all('/[aiueo]/i', $value, $matches);
        echo "Number Vowel = " . $num . "\n";
    }
}

$FindTheVowel = new FindTheVowel();
echo $FindTheVowel->simple_vowel('asnur');
