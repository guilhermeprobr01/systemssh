<?php

    include_once('for/config.php');



    function getInfo($user) {
        $url = 'https://www.habbo.com.br/api/public/users?name='.$user;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36');
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
        $result = curl_exec($ch);
        curl_close($ch); 
    
        $json = json_decode($result, true);
        return $json['motto'];
    }

    $resultado = null;

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            $nick = addslashes($_POST['nick']);
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $zap = $_POST['zap'];

            $result = mysqli_query($conexao, "SELECT COUNT(*) FROM usuarios WHERE nick='$nick'");
            $result2 = mysqli_query($conexao, "SELECT COUNT(*) FROM usuarios WHERE email='$email'")->fetch_row();
            $row = $result->fetch_row();

            if ($row[0] > 0) {

                $resultado = "Nick já Cadastrado..";

            } else if ($result2[0] > 0) {
                $resultado = "Email já cadastrado";
            } else if (getInfo($nick) != "SSHPOLICE") {
                $resultado =  "Missão incorreta";
            } else {
                $nick = $_POST['nick'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $zap = $_POST['zap']; 

                $result = mysqli_query($conexao, "INSERT INTO usuarios(nick,email,senha,zap) VALUES ('$nick', '$email', '$senha', '$zap')");

                header('Location: login');
            }

           
       
    }
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=7">
                    <link rel="stylesheet" href="index.css"> 
                    
                    <link rel="shortcut icon" href="img/logoglobal.jpg" type="image/x-icon">
                    <!--Id: 223 head link css index-->

                    <title>Police | SSH</title>
<style>
    body {
        background-color: rgb(58, 58, 58);
    }
   
</style>

                   
</head>
<body>
            <!--Contém todo o Conteúdo class = "Content"-->
            <div class="content">
                            <header>
                              <img src="img/sdulogo.svg" alt="Logo">
                                <h1>Cadastro</h1>
                                
                            </header>
                            
                            <main>
                               <h3 class="gouf" style="color: #aeaeae; font-family: Poppins; font-size: 14px;">Coloque sua missão no Habbo: SSHPOLICE</h3>
                               <div style="color: green; font-size: 14px; font-family: Poppins;"><?php echo $resultado; ?></div>
                                <form action="formulario.php" method="POST">
                                                <div class="input-field">
                                                
                                                    <input type="text" placeholder="Seu Nick..." id="text" name="nick" required>
                                                    <label for="text">
                                                        <img src="./img/avatar.svg" alt="Usuário do Habbo" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                    <input type="email" placeholder="Seu email..." id="email" name="email" required>
                                                    <label for="email">
                                                        <img src="./img/avatar.svg" alt="Email" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                    <input type="tel" placeholder="Seu zap..." id="zap" name="zap" required>
                                                    <label for="zap">
                                                        <img src="./img/avatar.svg" alt="zap" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                                <input type="password" placeholder="Senha" id="password" name="senha" required>
                                                                <label for="password">
                                                                    <img src="./img/lock.svg" alt="Senha">
                                                                </label>
                                                </div>
                                                
                                                
                                                <input type="submit" value="Cadastrar" class="btn" name="submit">
                                                
                                             
                                </form>
                               
                            </main>
                            <footer style="padding-top: 49px;">
                                        <span><a href="login">Já tem uma conta?</a></span>
                                        <a href="login">Entrar</a>
                            </footer>
                            
            </div>
</body>
</html>