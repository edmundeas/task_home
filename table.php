<?php
	// print table 
echo '<table>';

for($j = 0; $j <=10;$j++){

	echo "<tr style ='border:black solid 1px;width:50px;'>";

	for($i=0; $i <= 25; $i++) 
	{
 		echo 
 			"<td style ='border:black solid
 			1px;width:50px;height:50px;'></td>";
	}
	echo "</tr>";
}

echo '</table>';