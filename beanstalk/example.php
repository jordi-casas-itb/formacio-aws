<?php
  // Jordi Casas - June'23
  // Get an image from S3 bucket
  // To customize:
  // * Value of s3 bucket for an image
  // * Amazon RDS instance parameters
?>
<html>
  <img src = "https://jcb-web.s3.amazonaws.com/itblogo.jpg">
</html>


<?php
  // PHP code to retrieve environment variables, connect to a DB and show the result.

  print("<br><br>Hola, benvingut/da a l'aplicacio de prova ITB 2023!<br>");
  print("<br><br>Aquesta és la versió 1 de l'aplicació<br>");
  // Definir els paràmetres que connecten amb la BD  
  print("<br>Variables d'entorn:<br>");
  echo "<pre>";
  print_r($_SERVER);
  echo "</pre>";

  // Use this assignments if env variables are defined
  //$servername = $_SERVER['RDS_HOSTNAME'];
  //$username = $_SERVER['RDS_USERNAME'];
  //$password = $_SERVER['RDS_PASSWORD'];
  //$dbname = $_SERVER['RDS_DB_NAME'];

  // Use these assignments if values are hardcoded. Replace to your own parameters
  $servername = "curs-db.cluster-cuaz23shpxvl.us-east-1.rds.amazonaws.com";
  $username = "admin";
  $password = "ITB2023.";
  $dbname = "curs";
    

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("<br><br>La connexió a la BBDD ha fallat: " . $conn->connect_error);
  } 
  echo "<br><br>Connexió a BBDD correcte";
    
  
  $sql = "SELECT emp_no, first_name FROM employees";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>Informació extreta de la BBDD";
    while($row = $result->fetch_assoc()) {
      print_r($row);
      echo "id: " . $row["emp_no"]. " - Nom: " . $row["first_name"]. "<br>";
    }
  } else {
    echo "<br>No s'han trobat resultats";
  }
  $conn->close();  
?>
