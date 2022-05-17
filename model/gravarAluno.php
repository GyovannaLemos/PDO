<?php

    include_once "../factory/conexao.php";

    if($_POST['cxNome'] != ""){
        $conn = new Caminho();
        $query = "insert into Cliente (nome_cliente, email_cliente) values (:nome, :email)";

        $cadastrar = $conn-> getConn()->prepare ($query);

        $cadastrar->bindParam(':nome', $_POST['cxNome'], PDO::PARAM_STR);

        $cadastrar->bindParam(':email', $_POST['cxEmail'], PDO::PARAM_STR);

        $cadastrar->execute();

        if($cadastrar->rowCount()){
            echo "Dados cadastrados com sucesso";
        }
    }else{
        echo "Dados nao cadastrados";
    }