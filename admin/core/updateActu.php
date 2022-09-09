<?php

include('../../config/settings.php');

if(!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être là');
    header('Location:' .URL. '../../public/index.php');
    exit();
}

$_POST['title'] = trim($_POST['title']);
$_POST['description'] = trim($_POST['description']);

if(empty($_POST['title'])){
    flash_in('error', 'Le titre ne peut pas être vide.');
    header('Location: ../updateActu.php');
    exit();
}
if(empty($_POST['date'])){
    flash_in('error', 'La date ne peut pas être vide');
    header('Location: ../updateActu.php');
    exit();
}
if(empty($_POST['description'])){
    flash_in('error', 'La description ne peut pas être vide.');
    header('Location: ../updateActu.php');
    exit();
}

if(isset($_FILES['fichier']) AND !empty($_FILES['fichier']['name'])){
    $read = $db->prepare('SELECT file FROM actuality WHERE id = :id');
    $read->execute([
        ':id' => $_POST['id']
    ]);
    $modif = $read->fetch();
    $delet = $modif['file'];
    if(!empty($delet)){
        unlink('../data/'.$delet);
    }

    $tExtOk = ['png', 'jpg', 'jpeg', 'JPG'];
    $tFilename = explode('.', $_FILES['fichier']['name']);
    $extFile = array_pop($tFilename);
    if(in_array($extFile, $tExtOk)){
        $newName = 'pic-'.time().'.'.$extFile;
        $move = move_uploaded_file($_FILES['fichier']['tmp_name'],'../data'.$newName);
        if($move){
            $modFile = $db->prepare('UPDATE actuality SET file = :file WHERE id = :id');
            $modFile->execute([
                ':file' => $newName,
                ':id' => $_POST['id']
            ]);
            header('Location: ../promoBack.php?success');
        }else{
            flash_in('error', 'Erreur durant l\'importation');
            header('Location: ../updatePromo.php');
        }
    }else{
        header('Location: ../updatePromo.php?error');
        exit();
    }
}

$error = false;

if($error){
    header('Location: ../updateActu.php?error');
    exit();
}else{
    $mod = $db->prepare('UPDATE actuality SET title = :title, date = :date, description = :description WHERE id= :id');
    $mod->execute([
        ':id' => $_POST['id'],
        ':title' => $_POST['title'],
        ':date' => $_POST['date'],
        ':description' => $_POST['description']
    ]);
    header('Location: ../actuBack.php?success');
    exit();
}