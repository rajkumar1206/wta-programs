<!DOCTYPE html>
<html>
	<head>
		<title>Function Table</title>
    <?php
      function persons() {
        return array("Rajkumar"=>"21", "Gal Gadot"=>"37", "Sherlock Holmes"=>"43");
      }
    ?>
  <style>
    table, th, td {
      text-align: left;
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px;
    }
  </style>
	</head>
	<body>
  <h3>Associative Array Contents</h3>

  <table>
  <thead>
  <th>Name</th>
  <th>Age</th>
  </thead>
  <tbody>
    <?php
      $personsList = persons();
      foreach($personsList as $name => $age)
      echo "<tr><td>$name</td><td>$age</td></tr>";
    ?>
  </tbody>
  </table>
	</body>
</html>