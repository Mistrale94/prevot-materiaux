<?php

include('../../config/settings.php');

if(empty($_POST)){
    flash_in('error', 'Vous n\'avez pas accès à cette page');
    header('Location: ../login.php');
    exit();
}

$_POST = array_map('trim', $_POST);

if(empty($_POST['name']) || empty($_POST['password'])){
    flash_in('error', 'Tous les champs sont obligatoires');
    header('Location: ../login.php');
    exit();
}else{
    $search = $db->prepare('SELECT * FROM users WHERE username = :u AND password = :p');
    $search->execute([
        ':u' => $_POST['name'],
        ':p' => crypt_password($_POST['password'])
    ]);

    if($search->rowCount() == 0){
        flash_in('error', 'Les identifiants sont incorrects');
        header('Location: ../login.php?error');
        exit();
    }else{
        $data = $search->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user']['username'] = $_POST['name'];
        $_SESSION['user']['id'] = $data['id'];

        flash_in('success', 'Bon retour');
        header('Location: ../promoBack.php?success');
        exit();
    }
}