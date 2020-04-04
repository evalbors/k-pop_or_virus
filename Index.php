<?php
    use App\Connection;
    $connection= new Connection();

    $queryPorSalir= "SELECT * FROM kvirus WHERE estado='1' ";
    $result= mysqli_query ($connection->dbConnection, $queryPorSalir);
    $arrayPorSalir = array ();
    while ($row = mysqli_fetch_array($result)){
            $arrayPorSalir[] = array (
               "ID" => $row['ID'],
               "Status" => $row['estado'], 
               "Name" => $row['name'], 
               "Type" => $row['type'], 
               "Result" => $row['resultado'],  
        ); 
    }
    $porsalir=count ($arrayPorSalir);
    shuffle($arrayPorSalir);
    $ID = ($arrayPorSalir[0]['ID']);
    $nombre = ($arrayPorSalir[0]['Name']);
    $type = ($arrayPorSalir[0]['Type']);

    $queryResultado= "SELECT * FROM kvirus WHERE resultado='1' ";
    $resultado= mysqli_query ($connection, $queryResultado);
    $arrayResultado = array ();
    while ($row = mysqli_fetch_array($resultado)){
            $arrayResultado[] = array (
               "ID" => $row['ID'],
               "Status" => $row['estado'], 
               "Name" => $row['name'], 
               "Type" => $row['type'], 
               "Result" => $row['resultado'],  
        ); 
    }
    $contador= count($arrayResultado);
?>

<!DOCTYPE html>
<html>

<head>
    <title>K-Pop or Virus</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="kpop-or-virus">
    <link rel="stylesheet" href="kpop-or-virus.css">

</head>
    <header></header>
    <main>
        <?php
            include("connection.php");
            
        ?>
        <h1> <?php echo $nombre?> </h1>
        <p>Korean Pop Band or Virus? Choose one.</p>
        <div>
                 <div class="answer"><a href="result.php?type=<?php echo $type; ?>&ID=<?php echo $ID; ?><?php echo $porsalir; ?>&answer=virus"><img src="001-virus.png" width="120px" height="120px" alt="virus"><h3>Virus</h3></a>
                 </div>
                 <div class="answer"><a href="result.php?type=<?php echo $type; ?>&ID=<?php echo $ID; ?><?php echo $porsalir; ?>&answer=kpop"><img src="002-nu-metal-band.png" width="180px" height="180px" alt="Kpop"><h3>Korean Pop Band</h3>
                 </a></div>
            </form>
        </div>



    </main>

    <?php echo 'Contador: '. $contador;
    ?>

    <footer>
     <p><small>Icons designed by <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/"     title="Flaticon">www.flaticon.com</a> | <a href="https://www.flaticon.es/autores/monkik" title="monkik">monkik</a> </small></p>
    </footer>