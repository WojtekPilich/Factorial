<?php

namespace App;

class Factorial
{
    //recursive method
    public function recursive($number)
    {
        if ($number < 2) {
            return 1;
        } else {
            return $number * $this->recursive($number - 1);
        }
    }

    //non-recursive method
    public function non_recursive($number)
    {
        $result = 1;

        while ($number > 0) {
            $result *= $number--;
        }
        return $result;
    }
}

//recursive result
$result1 = new Factorial();
echo 'recurrent: ' . $result1->recursive(3);

echo '<br>';

//non non-recursive result
$result2 = new Factorial();
echo 'non: ' . $result2->non_recursive(5);
