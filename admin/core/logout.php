<?php

include('../../config/settings.php');

$_SESSION['user'] = null;

flash_in('success', 'A bientôt !');

header('Location: ../../index.php');
exit();