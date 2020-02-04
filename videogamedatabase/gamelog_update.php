<?php
	include 'database.php';
	$query = "SELECT * FROM games ORDER BY game";
	$games = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Game Log </title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Game Log</h1>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->

<table>
	<!-- table column headings -->
	<tr>
	  <th>Game</th>
	  <th>Genre</th>
	  <th>System</th>
	  <th>Why</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($games)) :  ?>

<tr>
  <td><?php echo stripslashes($row['game']); ?></td>
  <td><?php echo $row['genre']; ?></td>
  <td><?php echo $row['system']; ?></td>
  <td><?php echo $row['why']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<!-- close the form -->
<p class="middle"><a href="enter_new_record.php">Add a new video game.</a></p>

</div> <!-- close container -->
</body>
</html>
