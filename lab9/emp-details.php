<!DOCTYPE html>
<html>
	<head>
		<title>Employee Details</title>
		<style>
			h3 {
				color: green;
			}
		</style>
	</head>
	<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "rajkumar";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $db);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

			$number = $_POST["id"];
					
			$sql = "SELECT * FROM employee WHERE empno=$number";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<h3> id: " . $row["empno"]. "<br>Name: " . $row["ename"]. "<br>Salary: " . $row["esal"]. "<br></h3>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
		}
	?>

<h2>Employee Details</h2>
	<form action="./emp-details.php" method="POST">
		<label>Enter Employee Details</label>
		<input type="number" placeholder="Enter your emp id" name="id" />
		<button type="submit">Check Employee Details</button>
	</form>
	</body>
</html>