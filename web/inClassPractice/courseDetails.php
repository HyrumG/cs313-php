<?php  

require_once ("dbConnect.php");

$courseId = htmlspecialchars($_GET["course_id"]);

$db = get_db();

$query = "SELECT name, number FROM course WHERE id=:id";

$statement = $db->prepare($query);
$statement->bindValue(":id", $courseId, PDO::PARAM_INT);

$statement->execute();
$row = $statement->fetch();

$number = $row["number"];
$name = $row["name"];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	
	echo "<h1>Showing notes for: $number - $name</h1>";

?>

<form action="insertNote.php" method="POST">
	<input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
	<input type="date" name="date">
	<br>
	<textarea name="content" placeholder="Content"></textarea>
</form>
</body>
</html>

