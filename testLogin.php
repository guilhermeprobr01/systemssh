<?php
    session_start();
    // print_r($_REQUEST);
        require_once('config.php');

        
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        //imaginando que você  queira colocar um registro de quando fez a liberação seria necessário criar uma tabela com o registro
        //tipo: usuario_liberacao onde teriam os registros (id, usuario_id, momento_liberacao, usuario_id_admin)
        // na tabela usuário criaria o campo usuario_liberacao_id...  aí a consulta ficaria assim
        // SELECT * FROM usuarios WHERE nick = '$email' AND senha='$senha' AND usuario_liberacao_id is not null; 
      //Caso queira fazer de um jeito mais correto, não teria o campo no usuarios e a consulta ficaria assim:
      //SELECT u.*, CASE WHEN ul.id is null THEN 'Usuário ainda não liberado!'  ELSE '' END AS Mensagem FROM usuarios u LEFT JOIN usuario_liberacao ul ON ul.usuario_id = u.id  WHERE nick = '$email' AND senha='$senha' ;
        $sql = "SELECT * FROM usuarios WHERE nick = '$email' and senha = '$senha' and estado = 1";
        var_dump($sql);
        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

       // if(mysqli_num_rows($result) < 1)
       /* {
            unset($_SESSION['nick']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['nick'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
        */
        //
        if(mysqli_num_rows($result) < 1  )
        {
            unset($_SESSION['nick']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['nick'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }

?>