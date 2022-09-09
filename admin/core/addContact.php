<?php

include('../../config/settings.php');

$_POST['surname'] = trim($_POST['surname']);
$_POST['name'] = trim($_POST['name']);
$_POST['phone'] = trim($_POST['phone']);
$_POST['mail'] = trim($_POST['mail']);
$_POST['request'] = trim($_POST['request']);

if(empty($_POST['surname'])){
    flash_in('error', 'Votre nom ne peut pas être vide');
    header('Location: ../../public/contact.php#contact');
    exit();
}
if(empty($_POST['name'])){
    flash_in('error', 'Votre prénom ne peut pas être vide');
    header('Location: ../../public/contact.php#contact');
    exit();
}
if(empty($_POST['phone'])){
    flash_in('error', 'Votre téléphone ne peut pas être vide');
    header('Location: ../../public/contact.php#contact');
    exit();
}
if(empty($_POST['mail'])){
    flash_in('error', 'Votre email ne peut pas être vide');
    header('Location: ../../public/contact.php#contact');
    exit();
}
if(empty($_POST['request'])){
    flash_in('error', 'Le message ne peut pas être vide');
    header('Location: ../../public/contact.php#contact');
    exit();
}

$error = false;
if($error){
    header('Location: ../../public/contact.php#contact?error');
    exit();
}else{
    $add = $db->prepare('INSERT INTO contact (civ, job, depot, surname, name, phone, mail, request) VALUES (:civ, :job, :depot, :surname, :name, :phone, :mail, :request)');
    $add->execute([
        ':civ' => $_POST['civ'],
        ':job' => $_POST['job'],
        ':depot' => $_POST['depot'],
        ':surname' => $_POST['surname'],
        ':name' => $_POST['name'],
        ':phone' => $_POST['phone'],
        ':mail' => $_POST['mail'],
        ':request' => $_POST['request']
    ]);
    header('Location: ../../contact.php?success');
    exit();
}