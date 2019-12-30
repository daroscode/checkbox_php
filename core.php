<?php

$languages = array();
$return = false;

if (isset($_POST['btnSend']) && !empty($_POST['languages'])) {
    $languages = $_POST['languages'];
    $return = true;
}