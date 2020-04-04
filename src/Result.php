<?php
$connection= mysqli_connect('localhost', 'root', "", 'kvirus');
$id=$_GET['ID'];
$type=$_GET['type'];
$answer=$_GET ['answer'];


if($answer== $type)
{
    echo '<h2>Great!</h2>';
    $query="UPDATE kvirus SET resultado='1' ,estado='0' WHERE ID='$id'";
    $result = mysqli_query($connection, $query);
    echo '<a href="word-challenge1.php">Siguiente Pregunta</a>';
    
}
if($answer != $type)
{
   echo "<h2>Wrong!<h2>";
   $query="UPDATE kvirus SET estado='0' WHERE ID='$id'";
   $result = mysqli_query($connection, $query);


   echo '<a href="word-challenge1.php">Siguiente Pregunta</a>';
}

?>
