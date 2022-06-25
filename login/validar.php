<?php
    session_start();
    
    if(isset($_SESSION)){
        if(!isset($_REQUEST['txtNome'])){
            header("Location: login.php");
        }
    }else{
        exit();
    }

    if($_REQUEST['txtNome'] == "admin" && $_REQUEST['pswSenha'] == "nimda"){
        $_SESSION['usuario'] = "Administrador";
        header("Location: ../index.php");
    }else{
        header("Location: login.php");
    }