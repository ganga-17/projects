<!DOCTYPE html>
<html>
<body>

<?php
echo "Names in Ascending order";
echo "<br>";
echo "<br>";
$names = array("Ganga", "Prajitha", "Blessy");
sort($names);

$clength = count($names);
for($x = 0; $x < $clength; $x++) {
  echo $names[$x];

  echo "<br>";
}
echo "<br>";
  echo "sorted using values and in ascending order";
  echo "<br>";
  echo "<br>";
  $age = array("Ganga"=>"17", "Pajitha"=>"10", "Blessy"=>"20");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x ;
  echo "<br>";
}
  echo "<br>";
  echo "sorted using values and in descending order";
  echo "<br>";
  $age = array("Ganga"=>"17", "Pajitha"=>"10", "Blessy"=>"20");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
