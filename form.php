<?php
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);


    if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'])){

        $query = "INSERT INTO tb_formulario (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
        $result = mysqli_query($link, $query);

        header("Location: index.php");
        
    }

    ?>