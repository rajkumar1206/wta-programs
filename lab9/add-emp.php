<!DOCTYPE html>
<html>
	<head>
		<title>Add Employee</title>
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

      $name = $_POST['ename'];
      $sal = $_POST['esal'];
					
			$sql = "INSERT INTO employee(ename, esal) VALUES ('$name', '$sal')";
      $result = $conn->query($sql);

      if ($result === TRUE) {
        // output data of each row
        echo "<h2>Data Successfully added</h2>";
        echo "<h4>Name: $name</h4>";
        echo "<h4>Salary: $sal</h4>";
      } else {
        echo "<h2>Data Unsuccessfully</h2>";
        echo $conn->error;
      }
      $conn->close();
		}
	?>

<h2>Add Employee Details</h2>
	<form action="./add-emp.php" method="POST">
		<label>Enter Employee Name</label>
		<input type="text" placeholder="Emp Name" name="ename" />
    <br>
    <br>
		<label>Enter Employee Salary</label>
		<input type="number" placeholder="Emp Sal" name="esal" />
    <br>
    <br>
		<button type="submit">Add Employee Details</button>
	</form>
	</body>
</html>