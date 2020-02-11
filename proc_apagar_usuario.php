<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "DELETE FROM usuarios WHERE id = '$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(!empty($id)){
        if(mysqli_affected_rows($conn)){
            $_SESSION['msg'] = "<p style='color: green'>Usuário apagado com sucesso</p>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<p style='color: red'>Usuário NÃO existe</p>";
            header("Location: edit_usuario.php?id=$id");
        }
    }else{
        $_SESSION['msg'] = "<p style='color: red'>Necessário selecionar informar usuário</p>";
        header("Location: edit_usuario.php?id=$id");
    }
    
?>

