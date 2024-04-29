<?php

/*
Create a program that simulates a coin flip (randomly generating either "heads" or "tails"). The program should flip the coin 10 times and output the results
*/

for ($i = 1; $i <= 10; $i++) {
    $result = rand(0,1);
    if ($result == 0) {
        echo $i." heads"."<br>";
    } else {
        echo $i." tails"."<br>";
    }
}