<?php 
/* ****************************************
HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. 
Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. 
But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, 
the commission is twenty percent. 
If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  
the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. 
As a developer please help HF Consultancy for building this simple calculator using a ternary operator in PHP.
**************************************** */

$tuition = 9000;

$commission = 	($tuition >= 20000) ? ($tuition * 0.25) : 
               (($tuition >= 10000 && $tuition < 20000) ? ($tuition * 0.20) : 
               (($tuition >= 7000 && $tuition < 10000) ? ($tuition * 0.15) : 'Data is Invalid'));

echo "The Commission is: " . $commission;
