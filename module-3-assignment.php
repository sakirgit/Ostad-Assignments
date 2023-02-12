
/* ====================================
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
==================================== */

function check_even_odd($number) {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

$num = 5;
$result = check_even_odd($num);
echo "$num is $result";
 

/* ====================================
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
==================================== */

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The summation of the series 1 + 2 + 3 + ... + 100 is $sum";
                      
                      
                      
                      
                      
                      
