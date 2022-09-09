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
    header('Location: ../updateChantier.php');
    exit();
}
if(empty($_POST['date'])){
    flash_in('error', 'La date ne peut pas être vide.');
    header('Location: ../updateChantier.php');
    exit();
}
if(empty($_POST['description'])){
    flash_in('error', 'La description ne peut pas être vide.')
    header('Location: ../updateChantier.php');
    exit();
}

if(isset($_FILES['fichier']) AND !empty($_FILES['fichier']['name'])){

    $read = $db->prepare('SELECT file FROM construction WHERE id = :id');
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
        $newName = 'pic'.time().'.'.$extFile;
        $move = move_uploaded_file($_FILES['fichier']['tmp_name'],'../data/'.$newName);
        if($move){
            $modFile = $db->prepare('UPDATE construction SET file = :file WHERE id = :id');
            $modFile->execute([
                ':file' => $newName,
                'id' => $_POST['id']
            ]);
            header('Location: ../chantierBack.php?success');
        }else{
            flash_in('error', 'Erreur durant l\'importation');
            header('Location: ../updateChantier.php');
            exit();
        }
    }else{
        header('Location: ../updateChantier.php?error');
        exit();
    }
}

$error = false;

if($error){
    header('Location: ../updateChantier.php?error');
    exit();
}else{
    $mod = $db->prepare('UPDATE construction SET title = :title, date = :date, description = :description WHERE id = :id');
    $mod->execute([
        ':id' => $_POST['id'],
        ':title' => $_POST['title'],
        ':date' => $_POST['date'],
        ':description' => $_POST['description']
    ]);
    header('Location: ../chantierBack.php?success');
    exit();
}