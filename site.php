<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
      $characterName = "Bob";
      $characterAge = 90;

      echo "There once was a man named $characterName <br>";
      echo "He was $characterAge years old <br>";
      $characterName = "Mike";
      echo "He didn't like the name $characterName<br>";
      echo "But he did like being $characterAge<br>";

      echo("Hello World"); #dont need brackets
      echo "<h1>Mimi's Site </h1>";
      echo "<hr>";
      echo "<p>This is my site</p>";

      $phrase ="To be or not to be";
      $age = 30;
      $gpa = 30.3; #there is a difference
      $isMale = false;
      null;
      echo "Hello <br>\n"; #<br> makes line break in actual screen output
      echo "\n"; #this only makes a line break in the elements box...
      echo $phrase;
      echo 30;

      $phrase = "Giraffe Academy<br>";
      echo strtoupper($phrase);
      echo strtolower($phrase);
      echo strlen($phrase); #amount of characters inside the string, includes the <br>
      echo $phrase[0];
      $phrase[0] = "B";
      echo $phrase; #prints the phrase with the new $phrase[0] change
      echo $phrase;
      echo str_replace("Biraffe","Panda", $phrase); #Biraffe, due to $phrase changes on prior line
      echo str_replace("ffe","Panda",$phrase);

      echo substr($phrase, 8);
      echo substr($phrase, 8,3);

      echo 40.998 + 1;
      echo "<br>";
      $num = 10;
      $num--;
      $num += 9;
      $num *= 2;
      echo $num;
        echo "<br>";
      echo abs(-100);
        echo "<br>";
      echo pow(2,4); # 2^4
        echo "<br>";
      echo sqrt(144);
        echo "<br>";
      echo max(2, 10);
        echo "<br>";
      echo min(2, 10);
        echo "<br>";
      echo round(4.8);
        echo "<br>";
      echo ceil(7.3); #always round up
        echo "<br>";
      echo floor(7.8); #always round down
          echo "<br>";
#Get user input -set up a form
  ?>
  <form action="site.php" method="get">
      Name: <input type="text" name="username">
      <!-- <input type="submit"> -->
      <br>
      Age: <input type="number" name="age">
      <input type="submit">
  </form>
  <br>
Your name is: <?php echo $_GET["username"] ?>
<br>
Your age is: <?php echo $_GET ["age"] ?>
<hr>
<!-- Build a basic calculator-->
<form action="site.php" method="get">
  Num1: <input type="number" name="num1">
  <br>
  Num2: <input type="number" name="num2">
  <input type="submit">
</form>

Answer: <?php echo $_GET["num1"]+$_GET["num2"]?>
<hr>
<form action="site.php" method="get">
  Num1: <input type="number" name="num3">
  <br>
  Num2: <input type="number" name="num4">
  <input type="submit">
</form>

Answer: <?php echo $_GET["num3"]*$_GET["num4"]?>
<hr>
<!-- Build a MADLIB-->
<form action="site.php" method="get">
  Color: <input type="text" name="color"> <br>
  Plural Noun: <input type="text" name="pluralNoun"> <br>
  Celebrity: <input type="text" name="celebrity"> <br>
  <input type="submit">
</form>

<?php
  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $celebrity = $_GET["celebrity"];
 echo "Roses are $color <br>";
 echo "$pluralNoun are blue <br>";
 echo "I love $celebrity <br>";
?>
<hr>
<!-- GET= information gets posted in the URL Parameter
POST = info hidden in URL ie.password -->
<form action="site.php" method="post">
  Password: <input type="password" name="pass">
  <input type="submit">
</form>
  <br>
  Your name is: <?php echo $_POST["pass"] ?>
<hr>
  <!-- Arrays -->
<?php
  $friends = array("Kevin","Karen","Oscar","Jim");
  echo $friends[0];
  echo "<br>";
  echo $friends[1] = 400;
  echo "<br>";
  echo $friends[4] = "Mike";
  echo "<br>";
  echo count($friends);
  ?>

  <!-- Checkboxes = because the user can select multiple options
you store their info in an array, name = "fruits[]" -->
  <hr>
  <form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
    <input type="submit">
  </form>

<?php
  $fruits = $_POST["fruits"];
  echo $fruits[0];
?>
<hr>
<!-- Associative Arrays - key value pairs, keys must be unique -->
<?php
  $grades = array("Jim"=>"A+", "Pam"=>"B-","Oscar"=>"C+");
  $grades["Jim"] = "F";
  echo $grades["Jim"];
  echo count($grades);
  echo $grades[$_POST["student"]];
?>
<hr>
<form action="site.php" method="post">
  <input type="text" name="student">
  <input type="submit">
</form>

<?php
  $grades = array("Jim"=>"A+", "Pam"=>"B-","Oscar"=>"C+");
  echo $grades[$_POST["student"]];
?>
<hr>
  <!-- Functions = a container for code that performs a specific tag-->












  </body>
</html>
