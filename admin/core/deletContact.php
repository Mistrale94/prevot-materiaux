<?php

include('../../config/settings.php');

if(!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être là');
    header('Location:' . URL . '../../public/index.php');
    exit();
}else{

    $del = $db->prepare('DELETE FROM contact WHERE id = :id LIMIT 1');
    $del->execute([
        ':id' => $_GET['id']
    ]);
    header('Location: ../contactBack.php?success');
    exit();
}