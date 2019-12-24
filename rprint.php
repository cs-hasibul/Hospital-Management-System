<?php include 'header.php'; ?>
<style>

body{
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(images/cover.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
            color: white;
            align-content: center;
            margin:0;
            padding:0;
			-webkit-print-color-adjust: exact !important;
        }
</style>

  <div style="padding: 9px ;border: 0px;">
    <div class="table" >
      <div id="printableArea">
        <h2 align="center"> member Information Set </h2>
        
        <table border="1" align="center">
          
          <?php
           $id = $_GET["id"];
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "restaurent";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "SELECT a.Id, a.Name,a.Phone,a.Address,b.Id,b.Name,b.Phone,b.Type FROM patient a  JOIN doctor b ON a.Id=b.Id WHERE a.Id='$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
              echo "<tr><th>ID</th><th>Patient Name</th><th>Phone</th><th>Desease</th><th>Doctor Name</th><th>Phone</th><th>Type</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                 echo "<td>" . $row["Id"]. "</td><td>" . $row["Name"]. "</td><td>" .$row["Phone"]."</td><td>" . $row["Address"]. "</td><td>" . $row["Name"]. "</td><td>" .$row["Phone"]."</td><td>" . $row["Type"]. "</td>";
       
              }
              echo "</table>";
          }
          else {
              echo "0 results";
          }
          mysqli_close($conn);
          ?>
        </table>
      </div>

      <br><br>
      <center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
    </div>
  </div>
