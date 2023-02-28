<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;

if (isset($_POST['title'], $_POST['description'], $_POST['active'])) {
    $obVaga = new Vaga;
    $obVaga->title = $_POST['title'];
    $obVaga->description = $_POST['description'];
    $obVaga->active = $_POST['active'];
}
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/form.php';
include_once __DIR__ . '/includes/footer.php';
