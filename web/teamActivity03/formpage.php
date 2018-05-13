<!DOCTYPE html>
<html>
  <head>
  </head>
<!--  <input type="radio" name="" value="">-->
  <body>
    <form method="post" action="form.php">
      Name:
      <input type="text" name="name">
      <br>
      Email:
      <input type="text" name="email">
      <br>
      Major:
      <br>
      <?php
        $majors = array("Computer Science (CS)", "Web Design and Development (WDD)", "Computer Information Technology (CIT)", 
                       "Computer Engineering (CE)");
        
      foreach ($majors as $major) {
        echo "<input type='radio' name='major' value='$major'>$major<br>";
      }
      ?>
      Comments:
      <br>
      <textarea name="comment"></textarea>
      <br>
      <br>
      Select all of the continents that you have visited:
      <br>
      <ul>
        <input type="checkbox" name="visited[]" value="North America">North America
        <input type="checkbox" name="visited[]" value="South America">South America
        <input type="checkbox" name="visited[]" value="Europe">Europe
        <input type="checkbox" name="visited[]" value="Asia">Asia
        <input type="checkbox" name="visited[]" value="Australia">Australia
        <input type="checkbox" name="visited[]" value="Africa">Africa
        <input type="checkbox" name="visited[]" value="Antartica">Antartica
      </ul>
      <br>
      <button type="submit">Submit</button>
      
    </form>
  </body>
</html>