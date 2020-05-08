<h2>News</h2>
<?php 
   echo  $data["SoThich"][1];
echo "<br>";
   echo $data["Number"];
?>

<hr>

<table> <tr><th>Masv</th>
<th>Hoten</th>
<th>NamSInh</th></tr> 
<?php
 while($row = mysqli_fetch_array($data["SV"])){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo"</tr>";
 }
 
 ?>

 </table>