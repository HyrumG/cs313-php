<?php

require "dbConnect.php";
$db = get_db();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	

	<h2>Fill out to view the last 10 diaper entries</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		First Name: <input type="text" name="fname">
		Last Name: <input type="text" name="lname">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>

<?php  
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$arr = array($fname, $lname);
	$pName = implode(" ", $arr) . "<br>";
	echo "<p>$pName</p><br>";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {	
		$query = "SELECT p.name, dc.last_changed, ds.status FROM diaper_change dc INNER JOIN parent p ON dc.parent_id=p.id INNER JOIN diaper_status ds ON ds.id=dc.status_id WHERE p.name=:parentName";

		$statement = $db->prepare($query);
		$statement->bindValue(":parentName", $pName, PDO::PARAM_INT);
		// Bind any variables I need here...
		$statement->execute();
		$diapers = $statement->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($diapers);

		foreach ($diapers as $parent) {
		$name = $parent["name"];
		$last_changed = $parent["last_changed"];
		$status = $parent["status"];

		echo "<li>Name: $name, last changed: $last_changed, status: $status</li><br><br>";	

		}
	}
?>
</body>
</html>