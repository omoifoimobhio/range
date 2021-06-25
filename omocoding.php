<!-- Two arguments namely start and end showing a range of numbers in a return of arrays from start to end (3,8) -->
<?php
function startend($start, $end) {
return range ($start, $end);
}
$range = startend(3,8);
print_r($range);
?>
