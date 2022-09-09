<?php

include('../../config/settings.php');

$error = false;

if(empty($_POST)){
    flash_in('error', 'Il faut remplir le formulaire');
    $error = true;
}else{
    $_POST['name'] = trim($_POST['name']);
    $_POST['password'] = trim($_POST['password']);

    if(empty($_POST['name']) || empty($_POST['password'])){
        flash_in('error', 'Tous les champs sont obligatoires');
        $error = true;
    }
    if($_POST['password'] != $_POST['confirmation']){
        flash_in('error', 'Les deux mots de passe doivent être identiques');
        $error = true;
    }
    $used = $db->prepare('SELECT * FROM users WHERE username = :u');
    $used->execute([':u' => $_POST['name']]);

    if($used->rowCount() != 0){
        flash_in('error', 'Ce pseudo est déjà pris');
        $error = true;
    }
}

if($error){
    header('Location: ../addUsers.php');
    exit();
}else{
    $add = $db->prepare('INSERT INTO users (username, password) VALUES (:u, :p)');
    $add->execute([
        ':u' => $_POST['name'],
        ':p' => crypt_password($_POST['password'])
    ]);

    flash_in('success', 'Votre compte a bien été créé');
    header('Location: ../login.php');
    exit();
}