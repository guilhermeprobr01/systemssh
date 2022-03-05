<?php
         include_once('../config.php');

         $busca = $_POST['nick'];
         

         $result = "SELECT * FROM usuarios WHERE nick LIKE '$busca' LIMIT 1";
         
         $resul = mysqli_query($conexao, $result);

        $count = mysqli_num_rows($resul);

        if($count <= 0){
            echo("<h3>Nenhum Resultado encontrado</h3>");
            exit();
        }
        

      

       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/das.css">
    <title>Busca</title>
</head>
<body>
    

<br><br>
<div class="estile">
    <fieldset>
        <legend>
   
    </legend>
     <img align="left" class="giss" style="text-align: center;" 
    src="https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=<?php echo $busca?>&direction=2&head_direction=2&size=l&action=std,crr=6"/>
<br><br>
<br>

    <tr><td><a class="itens">Nick: </td>
<td> <?php 
                  while($row = mysqli_fetch_array($resul)){

                    $isActive = "";
                    if($row['estado' ] == 0){
                        $isActive = "Inativo";
                    }else{
                        $isActive = "Ativo";
                    }

                    echo( $row['nick']);
                    echo "<br>";
                    echo( "Patente: " . $row['patente']);
                    echo "<br>";
                    echo( "TAG: " . $row['tag']);
                    echo "<br>";
                    echo( "Status: $isActive");
                    echo "<br>";
                   

                   
                   
                    
                
                    
                    
                }
    ?></a></td></tr><br><br>
     <tr><td><a class="itenss">Militar : 
         <?php
         




         
         ?>
     
     
     
     
     
     <p class="itensh"></p></td>
<td> </a></td></tr>

    </fieldset>
</div>

</body>
</html>