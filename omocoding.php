<!-- Two arguments namely start and end showing a range of numbers in a return of arrays from start to end (3,8) -->
<?php
//Defining Function
function startend($start, $end) {
return range ($start, $end);
}
//Calling Function
$range = startend(3,8);
print_r($range);
?>
<br>

<!-- The return of the sum of numbers in the array (5,20,45,25,65) -->

<?php
//Defining Function
function addNumbers($a, $b, $c, $d, $e) {
  return $a + $b + $c + $d + $e;
}
//Calling Function
echo addNumbers(5,20,45,25,65);

?>
