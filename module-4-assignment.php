<pre>
====================================================== 
1. Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
======================================================
<?php 
function sort_by_length($arr) {
   usort($arr, function($a, $b) {
     return strlen($a) - strlen($b);
   });
   return $arr;
 }
 print_r(sort_by_length([ "orange", "apple", "banana", "kiwi"]));

?>


====================================================== 
2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
======================================================
<?php 
function concatenate_reverse($str1, $str2) {
   $str1_length = strlen($str1);
   $str2_length = strlen($str2);
   $concatenated_string = $str1 . substr($str2, 0, $str2_length);
   return $concatenated_string;
 }
 
 
 $str1 = "Hello";
 $str2 = "world";
 $result = concatenate_reverse($str1, $str2);
 echo $result; // Output: Helloworlddlrow
 
 ?> 


 ====================================================== 
 3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
 ======================================================
 <?php 
function removeFirstAndLast($array) {
   array_shift($array);
   array_pop($array);
   return $array;
 }
  
print_r(removeFirstAndLast(['a', 'b', 'c', 'd']));
?> 

====================================================== 
4. Write a PHP function to check if a string contains only letters and whitespace.
======================================================
<?php 
function onlyLettersAndWhitespace($str) {
   return preg_match('/^[A-Za-z\s]+$/', $str);
 }
  
 $string1 = "Hello world";
 $string2 = "12345";
 $string4 = "This is a test with numbers 12345";
 
 if (onlyLettersAndWhitespace($string1)) {
     echo "($string1) contains only letters and whitespace.\n";
 } else {
     echo "($string1) contains non-letter or non-whitespace characters.\n";
 }
 
 if (onlyLettersAndWhitespace($string2)) {
     echo "($string2) contains only letters and whitespace.\n";
 } else {
     echo "($string2) contains non-letter or non-whitespace characters.\n";
 }
 
?> 

====================================================== 
5. Write a PHP function to find the second largest number in an array of numbers.
======================================================
<?php 
function secondLargest($arr) {
   rsort($arr);   
   return $arr[1];
}
$numbers = [5, 8, 3, 1, 9, 4, 6, 7, 2];
$secondLargest = secondLargest($numbers);
echo "The second largest number is: " . $secondLargest;









