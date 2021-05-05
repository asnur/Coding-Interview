<?php

class FizzBuzz
{

    //Simple Sederhana

    public function cek(int $value)
    {
        for ($i = 1; $i <= $value; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz\n";
            } elseif ($i % 3 == 0) {
                echo "Fizz\n";
            } elseif ($i % 5 == 0) {
                echo "Buzz\n";
            } else {
                echo $i . "\n";
            }
        }
    }

    //Studi Kasus

    public function kembalian(int $total_belanja, int $total_uang)
    {
        error_reporting(0);
        $pecahan = [100000, 75000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 25, 10, 1];

        if ($total_uang < $total_belanja) {
            echo "Uang Kurang\n";
        } elseif ($total_belanja == $total_uang) {
            echo "Tidak Ada Kembalian\n";
        } else {
            $jumlah_kembalian = $total_uang - $total_belanja;
            echo "Jumlah Kembalian = Rp. " . number_format($jumlah_kembalian) . "\n";
            $jumlah_pecahan = count($pecahan);
            for ($i = 0; $i <= $jumlah_pecahan; $i++) {
                $genap = floor($jumlah_kembalian / $pecahan[$i]);
                $sisa = $jumlah_kembalian % $pecahan[$i];
                if ($genap > 0) {
                    $jenis = ($pecahan[$i] > 1000) ? "Lembar" : "Keping";
                    echo $genap . " " . $jenis . " " . "Uang Pecahan" . " Rp. " . number_format($pecahan[$i]) . "\n";
                }
                $jumlah_kembalian = $sisa;
            }
        }
    }
}

$FizzBuzz = new FizzBuzz();
echo $FizzBuzz->kembalian(41111, 120000);
