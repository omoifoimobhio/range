<!-- Two arguments namely start and end showing a range of numbers in a return of arrays from start to end (3,8) -->
<?php
function startend($start, $end) {
return range ($start, $end);
}
$range = startend(3,8);
print_r($range);
?>
<br>

<!-- The return of the sum of numbers in the array (5,20,45,25,65) -->

<?php

function addNumbers($a, $b, $c, $d, $e) {
  return $a + $b + $c + $d + $e;
}
echo addNumbers(5,20,45,25,65);

?>
