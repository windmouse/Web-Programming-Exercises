<?php 
$row = 4;
$column = 5;
$k = 1;
echo "<table border = '1'>";
for ($i=0; $i < $row; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $column; $j++) { 
		echo "<td>$k</td>";
		$k++;
	}
	echo "</tr>";
}
echo "</table>";
?>