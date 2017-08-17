<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
    body{
        margin:0;
    }
    .table{
        width: 95%;
    }

</style>
</head>
<body>
<div class="bs-example">
    <form name="scanRepertoire" method="POST" id="formScanRepertoire">
        <div class="form-group">
            <label for="inputEmail">Chemin</label>
            <input type="text" class="form-control" id="chemin" placeholder="Z:\2017-05\03_Php_Exercices\Semaine-31\mardi_01_08\Michael" name="chemin">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>
</body>
</html>                                     

<?php 
//var_dump($_POST);
//$dir = new DirectoryIterator(dirname(__FILE__)); dirname renvoie le chemin du dossier parent 
$chemin = 'Z:\2017-05\03_Php_Exercices\Semaine-31\mardi_01_08\Michael';

function scanRepertoir($chemin){
    //echo $chemin."<br>"; 
$dir = new DirectoryIterator($chemin);
foreach ($dir as $fileinfo) {
        if ($fileinfo !="." and $fileinfo !="..")
        {
            $string=$chemin."/".$fileinfo;
            if(is_dir($string)){
                echo "D- $fileinfo <br>";
                scanRepertoir($string);
                //echo $fileinfo->getFilename()."<br>";
            }
            else{
                
                echo "-- $fileinfo <br>";
                $ressource=fopen($string, 'r');
                global $StringFinal;
                $StringFinal.= $StringFinal.fread($ressource, filesize($string));
                fclose($ressource); 
            }
        }
    }
    
}
if(isset($_POST['chemin']) and $_POST['chemin']!=""){
        
        $chemin = $_POST['chemin'];
        $StringFinal="";
        echo "<table class='table' style='border:3px solid black;margin:20px;'><tr class='success'><td class='info'>";
        echo scanRepertoir($chemin);
        echo "</td></tr ></table>";
        $fichier='BilanPromo.csv';//nom du fichier CSV
        file_put_contents($fichier, $StringFinal);
        echo "<br><br>";
        echo "$StringFinal";
}
?>