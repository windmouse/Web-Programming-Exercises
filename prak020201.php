<?php 
$row = 4;
$column = 5;
echo "<table border = '1'>";
for ($i=0; $i < $row; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $column; $j++) { 
		echo "<td>Hello</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>