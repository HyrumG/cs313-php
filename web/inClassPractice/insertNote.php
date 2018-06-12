<?php

$courseId = htmlspecialchars($_POST["course_id"]);
$date = htmlspecialchars($_POST["date"]);
$content = htmlspecialchars($_POST["content"]);

require_once ("dbConnect.php");

$db = get_db();

$query = "INSERT INTO note (course_id, content, date) VALUES (:courseId, :content, :date)";

$statement = $db->prepare($query);
$statement->bindValue(":courseId", $courseId, PDO::PARAM_INT);
$statement->bindValue(":content", $content, PDO::PARAM_STR);
$statement->bindValue(":date", $date, PDO::PARAM_STR);

$statement->execute();

// echo "It has been inserted";

header("Location courseDetails.php?course_id=$courseId");

?>