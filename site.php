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
<?php
  function sayHi($name, $age){
    echo "Hi $name, you are $age <br>";
  }
sayHi("Doug",33);
sayHi("Steve",22);
 ?>
 <hr>

<?php
  function cube($num){
    echo "Hello <br>";
    return ($num * $num * $num);
  }
#no code excutes after return line
  function wack($num){
    return;
  }
  #empty return just stops a function
$cubeResult = cube(4);
echo $cubeResult;

$wackResult = wack(2);
echo $wackResult;
 ?>
<hr>
  <!-- If Statements -->
  I wake up
  If I'm hungry
    I eat breakfast

  I leave my house
  If it's cloudy
    I bring an umbrella
  Otherwise
    I bring sunglasses
<hr>
  <?php
  $isMale = false;
  $isTall = false;

  if($isMale && $isTall){
    echo "You are a tall male";
  } elseif ($isMale && !$isTall) {
    echo "You are a short male";
  } elseif (!$isMale && $isTall) {
    echo "You are not male but tall";
  }else {
    echo "You are not male and not tall";
  }
  ?>
<hr>
<?php
  function getMax($num1, $num2){
    if($num1 > $num2){
      return $num1;
    } else {
      return $num2;
    }
  }

echo getMax(3,90);
?>
<hr>
<?php
#this is mine, it's kinda long winded/ not sure if fully correct
function getMax3($num1,$num2,$num3){
  if ($num1 > $num2 && $num2 > $num3 || $num1 > $num2 && $num3 > $num2) {
    return $num1;
  } elseif ($num2 > $num1 && $num1 > $num3 || $num2 > $num1 && $num3 > $num1) {
    return $num2;
  }elseif ($num3 > $num2 && $num2 > $num1 || $num3 > $num2 && $num2 > $num1) {
    return $num3;
  } else {
  return "Error, please try again";
  }
}
echo getMax3(31.3,31.1,31.2);
 ?>
<hr>

<?php
#($num3 >= $num1 && $num3 >= $num2)
 function getMax3Tut($num1,$num2,$num3) {
   if ($num1 >= $num2 && $num1 >= $num3) {
     return $num1;
   } elseif ($num2 >= $num1 && $num2 >= $num3) {
     return $num2;
   } else {
     return $num3;
   }
 }

echo getMax3Tut(3.1,3.2,3.0);
 ?>
<hr>
  <!-- Create Multi-Functional Calculator -->
<form action="site.php" method="post">
First Number: <input type="number" step = "0.001" name="num1"> <br>
Operater: <input type="text" name="op"> <br>
Second Number: <input type="number" step = "0.001" name="num2"> <br>

<input type="submit">
</form>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if ($op == "+"){
  echo $num1 + $num2;
}elseif ($op == "-") {
  echo $num1 - $num2;
}elseif ($op == "*") {
  echo $num1 * $num2;
}elseif ($op == "/") {
  echo $num1 / $num2;
} elseif ($op == "%") {
    echo $num1 % $num2;
} elseif ($op == "^" || $op == "**") {
    echo $num1 ** $num2;
}else {
  echo "Invalid Operator";
}
 ?>
<hr>

<!-- Switch Statements -->
<form action="site.php" method="post">
  What was your grade? <input type="text" name="grade"> <br>
  <input type="submit">
</form>

<?php
$grade = $_POST["grade"];
#echo $grade;

switch($grade){
  case "A":
    echo "You did amazing!";
    break;
  case "B":
    echo "You did pretty good";
    break;
  case "C":
    echo "You did poorly";
    break;
  case "F":
    echo "YOU FAIL";
    break;
  default:
    echo "Invalid grade";
    break;
}
 ?>
<hr>
<!-- While Loops -Don't forget the $index++, otherwise infinite loop-->
<?php
  $index = 1;
  while ($index <= 5) {
    echo "$index <br>";
    $index++;
  }
echo "<hr>";
 ?>

<!-- Do While Loops = excutes the loop body then checks the condition-->
<?php
$index = 6;
do {
  echo "$index <br>";
  $index++;
} while ($index <= 5)
 ?>

<!-- For Loops = keep track of incrementing variable-->
<?php
$index = 1;
while ($index <= 5) {
  echo "$index <br>";
  $index++;
}

echo "<hr>";

$luckyNumbers = [11,21,31,41,51];
for ($i = 0; $i < count($luckyNumbers); $i++) {
  echo "$luckyNumbers[$i] <br>";
}

//DOMComment
/* multi
lines of comments
*/
#comment
 ?>

<!-- Include in HTML
Useful for updating all websites, just change the header.html
instead of individual pages. Use "include" keyword in php to join html pages
Break up website into reusable components, ie. header, footer, navigation list
Makes website more modular -->

<?php include "header.html" ?>
<p> Hello World <p>
<?php include "footer.html" ?>

<!-- Includes in PHP -->

<?php
#Define value of variables here, instead of in article-header.php
  $title = "My First Post";
  $author ="Mimi";
  $wordCount = 400;
  include "article-header.php";
 ?>

<hr>

<?php
#able to use functions & variables from the useful-tools.php file
  include "useful-tools.php";
  echo $feetInMile;
  sayHello("Mike");
?>
<hr>

<!-- Objects, a lot of things in the real world can't be represent
everything with a single string, boolean, or number -->
<?php
#1. create a Class, template of a Book + Constructor function
  class Book {
    var $title;
    var $author;
    var $pages;
    # "$this" is a keyword refering to
    function __construct($aTitle, $aAuthor, $aPages){
      $this->title=$aTitle;
      $this->author=$aAuthor;
      $this->pages=$aPages;
    }
  }

#2. create Objects(below), are an instance of a Class
#Created with the constructor function above
#still able to change the values, seen in 2nd line below
$book1 = new Book("Harry Potter","JK Rowling",400);
$book1 -> title = "Hunger Games";
$book2 = new Book("Lord of the Rings", "Tolkein", 700);

echo $book1->title;
echo $book2->pages;
 ?>
<hr>
 <!-- Make Object Functions -->
<?php
class Student {
  var $name;
  var $major;
  var $gpa;
  function __construct($name,$major, $gpa){
    $this-> name = $name;
    $this-> major = $major;
    $this-> gpa = $gpa;
  }
    function hasHonors(){
      if ($this -> gpa >= 3.5){
        return "Honors roll";
      } else {
        return "No Honors";
      }
    }
}

$stud1 = new Student("Jim","Business",2.6);
$stud2 = new Student("Pam","Art",3.6);

echo $stud1->name;
echo $stud1->hasHonors();
echo "<hr>";
echo $stud2->hasHonors();
?>
<hr>
<!-- Getters and Setters-->
<?php
class Movie{
  //Visibility Modifer "public"/var = means attribute open to everybody
  //"private" = only code inside the class that it's declared is able to use
  public $title;
  private $rating;
  function __construct($title,$rating){
    $this->title = $title;
    $this->rating = $rating;
  }
  #make a function to get the rating, even though the rating is private
  function getRating(){
    return $this->rating;
  }
//make a function that can set rating, with limiitations by If Statement
//setting the attribute to private, and create a getter fn
//and setter fn (to filters out non - ratings)
  function setRating($rating){
    if($rating =="G" || $rating =="PG" || $rating =="PG-13" || $rating =="R" || $rating =="NR"){
      $this->rating = $rating;
    } else{
      $this->rating="NR";
    }
  }
}
$avengers = new Movie("Avengers","PG-13");
    //G, PG, PG-13, R, NR
    //You want to limit the ratings to only valid values
$avengers-> setRating("dog");
echo $avengers-> getRating();
 ?>
<hr>

<!-- Inheritance -->
<?php
class Chef {

  function makeChicken(){
    echo "The chef makes chicken <br>";
  }
  function makeSalad(){
    echo "The chef makes salad <br>";
  }
  function makeSpecialDish(){
    echo "The chef makes bbq ribs <br>";
  }
}

class ItalianChef extends Chef {
  function makePasta(){
    echo "The chef makes pasta<br>";
  }
  function makeSpecialDish(){
    echo "The chef makes chicken parm";
  }
}


$chef = new Chef;
$chef->makeChicken();


$italianchef = new ItalianChef;
$italianchef ->makeChicken();
$italianchef ->makePasta();
# $chef->makePasta(); this would throw error, regular chef can't make pasta


$chef ->makeSpecialDish();
$italianchef ->makeSpecialDish();
 ?>

















</html>
