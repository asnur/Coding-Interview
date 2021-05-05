<?php

class Palindrom
{
    public function manual(array $value)
    {
        $output = '';
        foreach ($value as $v) {
            for ($i = strlen($v) - 1; $i >= 0; $i--) {
                $output .= $v[$i];
            }

            if ($output == $v) {
                echo "Palindrome\n";
            } else {
                echo "Not Palindrome\n";
            }
        }
    }

    public function not_reverse(string $value)
    {
        for ($i = 0; $i < strlen($value); $i++) {
            // echo $i . ":" . (strlen($value) - $i - 1) . "\n";
            $indexAwal = $i;
            $indexAkhir = strlen($value) - $i - 1;
            // echo $indexAwal . "|" . $indexAkhir . "\n";
            if ($value[$indexAwal] !== $value[$indexAkhir]) {
                echo "Not Palindrom\n";
                return false;
            } else {
                echo "Palindrom\n";
                return true;
            }
        }
    }

    public function half_char_not_reverse(string $value)
    {
        for ($i = 0; $i < strlen($value) / 2; $i++) {
            // echo $i . ":" . (strlen($value) - $i - 1) . "\n";
            $indexAwal = $i;
            $indexAkhir = strlen($value) - $i - 1;
            // echo $indexAwal . "|" . $indexAkhir . "\n";
            if ($value[$indexAwal] !== $value[$indexAkhir]) {
                echo "Not Palindrom\n";
                return false;
            } else {
                echo "Palindrom\n";
                return true;
            }
        }
    }
}

$Palindrome = new Palindrom();
echo $Palindrome->manual(["kook", "ani"]);
// echo $Palindrome->not_reverse("eke");
// echo $Palindrome->half_char_not_reverse("ake");
