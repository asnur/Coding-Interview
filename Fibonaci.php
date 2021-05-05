<?php

class Fibonaci
{
    public function cek($total, $number_before, $number_current)
    {
        $result = $number_before . $number_current;
        for ($i = 0; $i < $total - 2; $i++) {
            $output = $number_current + $number_before;
            $result .= $output;

            $number_before = $number_current;
            $number_current = $output;
        }

        return $result . "\n";
    }
}


$Fibonaci = new Fibonaci();
echo $Fibonaci->cek(10, 1, 2);
