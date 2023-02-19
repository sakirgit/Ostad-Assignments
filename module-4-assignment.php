
/* ======================================================
1. Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
====================================================== */

function sort_by_length($arr) {
  usort($arr, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $arr;
}
print_r(sort_by_length([ "orange", "apple", "banana", "kiwi"]));




/* ======================================================
2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
====================================================== */

function concatenate_strings($str1, $str2) {
  // Get the length of the first string
  $str1_len = strlen($str1);

  // Extract the end of the first string and concatenate with the second string
  $result = substr($str1, $str1_len - strlen($str2)) . $str2;

  // Return the result
  return $result;
}



/* ======================================================
3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
====================================================== */

function removeFirstAndLast($array) {
  array_shift($array);
  array_pop($array);
  return $array;
}



/* ======================================================
4. Write a PHP function to check if a string contains only letters and whitespace.
====================================================== */

function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}



/* ======================================================
5. Write a PHP function to find the second largest number in an array of numbers.
====================================================== */

function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } else if ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
            $secondLargest = $arr[$i];
        }
    }

    return $secondLargest;
}




