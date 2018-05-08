<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $major = $_POST['major'];
  $comment = $_POST['comment'];
  
//echo "<h2>Your Input:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $major;
//echo "<br>";
//echo $comment;
?>

<html>
  <head>
  </head>
  <body>
    <?php
      echo "<h2>Your Input:</h2>";
      echo "Your name: " . $name;
      echo "<br>";
      echo "<a href='mailto:'" . $email . ">Email me!</a>";
      echo "<br>";
      echo "Your major: " . $major;
      echo "<br>";
      echo "Your comment: " . $comment;
      echo "<br>";
    
      $continents = $_POST['visited'];
      if(empty($continents))
      {
        echo("You didn't select any continents.");
      }
      else
      {
        $N = count($continents);
        echo("You have been to $N continent(s): ");
        for($i=0; $i < $N; $i++)
        {
          echo($continents[$i] . " ");
        }
      }
    ?>
  </body>
</html>