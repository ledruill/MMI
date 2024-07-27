<?php
require("form.php");

$data = array('nom'=>'Paul', 'password'=>'1234');
$monform = new form($data);
// var_dump($monform);

$monform->input('nom');
$monform->input('password');
$monform->submit();

$monform2 = new form();

$monform2->input('nom2');
$monform2->input('password2');
$monform2->submit();

?>
