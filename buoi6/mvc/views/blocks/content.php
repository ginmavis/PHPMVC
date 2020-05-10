
          <h3>Category</h3>
  <table>
    <tr>
      
  <th>id</th>
  <th>Name</th>
  <th>ordering</th>
  <th>active</th>

    </tr>
  <?php 
  while($r= mysqli_fetch_assoc($data["categories"])){
      echo "<tr>";
      echo "<td>".$r["id"]."</td>";
      echo "<td>".$r["Name"]."</td>";
      echo "<td>".$r["ordering"]."</td>";
      echo "<td>".$r["active"]."</td>";
      echo "</tr>";
  }
  
  ?>
  </table>

           <h3>ads</h3>
  <table>
    <tr>
      
  <th>id</th>
  <th>Title</th>
  <th>link</th>
  <th>ordering</th>
  <th>active</th>

    </tr>
  <?php 
  while($r= mysqli_fetch_assoc($data["ads"])){
      echo "<tr>";
      echo "<td>".$r["id"]."</td>";
      echo "<td>".$r["title"]."</td>";
      echo "<td>".$r["link"]."</td>";
      echo "<td>".$r["ordering"]."</td>";
      echo "<td>".$r["active"]."</td>";
      echo "</tr>";
  }
  
  ?>



  </table>