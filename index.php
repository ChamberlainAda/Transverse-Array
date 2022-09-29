<?php
// CHAMBERLAIN-OKEZIE ADAEZE


// Function to find insert position of K
function checkArr($arr, $n , $K) {

     // Traverse the array
    for ($i = 0; $i < $n; $i++){
        
        // If K is found
        if($arr[$i] == $K){
            return $i;
        }

        // If current array element
        // exceeds K
        else if ($arr[$i] > $K) {  
            return $i;
        }

    }
     // If all elements are smaller
    // than K
    return $n;
}

// Given the array 'arr' to insert the integer 'K, in order , 'K' would have to be placed at index 1
$arr = array(1,3,5,6);
$n = count($arr);
$K = 2;

echo(checkArr($arr, $n, $K));
?>
