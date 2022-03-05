<?php
    session_start();
    include_once('../config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nick'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);

    // Função para pegar o nome de usuário logado
    // function getUser() {
    //     global $conexao;

    //     $result = $conexao->query("SELECT * FROM usuarios WHERE email = '".$_SESSION['email']."'")->fetch_assoc();
    //     return ucfirst($result['nick']);

    //     //obs: ucfirst() deixa a primeira letra maiuscula.
    // }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/das.css">
    <title>Police | SSH</title>
</head>
<body>





<!--<img align="left" class="gs containe" style="text-align: center;" src="https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=victor09305&direction=2&head_direction=2&size=l&action=std,crr=6">
<br><p>Olá sou o Fundador da SSH, estou muito feliz por voc~e está aqui, fique atento as regras! se nossa polícia!
A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica para preencher os espaços de texto em publicações para testar
A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica para preencher os espaços de texto em publicações para testar
A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica para preencher os espaços de texto em publicações para testar
A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica para preencher os espaços de texto em publicações para testar
A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção gráfica para preencher os espaços de texto em publicações para testar
</p>-->


<table>
  <tr>

    <td>
        
    <img align="left" class="gs containe" style="text-align: center;" 
    src="https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=victor09305&direction=2&head_direction=2&size=l&action=std,crr=6"/></td>
    
    <td style="color: rgb(0, 37, 70);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.3rem;"> Olá, bom te ver de novo, olha não esquece hein, não compartilhe sua senha, isso pode
        acarretar problemas para você, e para nossa polícia, não esqueça, compartilhar seus dados é errado!
    </td> 
  </tr>
 
</table>

<hr>





<fieldset class="em">
<center>
<div class="container">
                    <form class="form-inline formulario" action="busca.php" method="POST">

                                <div class="row">
                                    
                                    <div class="col-auto">
                                        <input type="search" placeholder="Nick" name="nick" class="sub" autocomplete="off"/>
                                </div>

                                    <div class="col-auto">
                                        
                                    <input type="submit" class="btn btn-secondary btn-sm" value="Pesquisar"></input>
                                    </div>
                                    
                                    </div>
                            </form>
</div>
</center>
</fieldset>

<div class="alert alert-primary fixed" role="alert">
  Pagamento dia 00/00 lembre-se! 
  Participe das votações!
</div>





 <script src="das.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>