<?php
    require('conexao.php');

    if(!empty($_POST)){
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $error = '';
        
        $senhaencriptada = base64_encode($senha);

        $result = mysqli_query ($conexao, "SELECT * FROM usuarios WHERE user = '$user' AND senha = '$senhaencriptada' ");
        #echo $result;
        #$result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row['user'];
            $_SESSION['senha'] = $row['senha'];
            $_SESSION['nivel_usuario'] = $row['nivel_usuario'];

            if($_SESSION['nivel_usuario'] == 0){
                header("Location:submissoes.php");

            }
            if($_SESSION['nivel_usuario'] == 1){
                header("Location:submissoes.php");
            }

        }
        else{
            echo 'erro';
        }
    }

?>