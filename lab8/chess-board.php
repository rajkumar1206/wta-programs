<!DOCTYPE html>
<html>
	<head>
		<title>Chess Board</title>
    <style>
      .chessboard {
        background: grey;
      }
      .black {
        width: 80px;
        height: 80px;
        background: black;
      }
      .white {
        width: 80px;
        height: 80px;
        background: white;
      }
    </style>
	</head>
	<body>
  <h2>Chess Board</h2>
	<?php
    // table content
    echo "<table class=\"chessboard\">";
		for ($x = 0; $x < 8; $x++) {
      // row of a table
      echo "<tr>";
      for ($y = 0; $y < 8; $y++) {
        if (($x+$y)%2==0)
          echo "<td class=\"black\"></td>";
        else
          echo "<td class=\"white\"></td>";
      }
      echo "</tr>";
    }
    echo "</table>";
	?>
	</body>
</html>