<?php
/* 
Write code that will go through each number from 1 to 100 and:

For each number that is a multiple of 3, print "Whizz"
For each number that is a multiple of 5, print "Pop"
For numbers which are a multiple of both 3 and 5, print "WhizzPop"
All other numbers should just print normally

*/

for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        echo "Whizz"."<br>";
    } else if ($i % 5 == 0) {
        echo "Pop"."<br>";
    } else if ($i % 3 == 0) {
        echo "WhizzPop"."<br>";
    } else {
        echo $i."<br>";
    }
}
