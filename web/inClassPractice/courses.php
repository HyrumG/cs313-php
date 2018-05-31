<?php
require_once ("dbConnect.php");

$db = get_db();

if (!isset($db)) {
	die("DB connetion was not set.");
}

$query = "SELECT id, name, number FROM course";

$statement = $db->prepare($query);

// Bind any variables I need here...
$statement->execute();

$courses = $statement->fetchAll(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Courses</h1>

	<ul>
<?php  

	foreach ($courses as $course) {
		$id = $course["id"];
		$name = $course["name"];
		$number = $course["number"];

		echo "<li><a href='courseDetails.php?course_id=$id'>$number - $name</a></li></br>";
	}


?>
	</ul>
</body>
</html>