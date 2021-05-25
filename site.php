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

  ?>




  </body>
</html>
