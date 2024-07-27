<?php
require("form.php");
$monform = new form($_POST);
?>
<form action="#" method="post">
<?php
var_dump($_POST);
$monform->input('nom');
$monform->input('password');
$monform->submit();
?>
</form>