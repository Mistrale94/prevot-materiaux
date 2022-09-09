<?php

include('../../config/settings.php');

if(!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être ici');
    header('Location:'.URL.'../../public/index.php');
    exit();
}

$_POST['title'] = trim($_POST['title']);
$_POST['description'] = trim($_POST['description']);

if(empty($_POST['title'])){
    flash_in('error', 'Le titre de la promotion ne peut pas être vide.');
    header('Location: ../addChantierBack.php');
    exit();
}
if(empty($_POST['date'])){
    flash_in('error', 'La date de la promotion ne peut pas être vide.');
    header('Location: ../addChantierBack.php');
    exit();
}
if(empty($_POST['description'])){
    flash_in('error', 'La description de la promotion ne peut pas être vide.');
    header('Location: ../addChantierBack.php');
    exit();
}

$error = false;
if($_FILES['fichier']['error'] != 0){
    $error = true;
}
$tExtOk = ['png', 'jpg', 'jpeg', 'JPG'];
$tFilename = explode('.', $_FILES['fichier']['name']);
$extFile = array_pop($tFilename);

if(!in_array($extFile, $tExtOk)){
    $error = true;
}
if($error){
    header('Location: ../addChantierBack.php?error');
    exit();
}else{
    $newName = 'pic-'.time().'.'.$extFile;
    move_uploaded_file($_FILES['fichier']['tmp_name'],'../data/'.$newName);

    $add = $db->prepare('INSERT INTO construction (file, title, date, description) VALUES (:file, :title, :date, :description)');
    $add->execute([
        ':file' => $newName,
        ':title' => $_POST['title'],
        ':date' => $_POST['date'],
        ':description' => $_POST['description']
    ]);
    header('Location: ../chantierBack.php?success');
    exit();
}