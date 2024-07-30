<?php
    // Td5 : Interface
    // Département MMI
    require 'personne.php';
    $individu1=new Personne('Paul','Martin');
    $individu1->travaille(35);
    echo $individu1->sePresente();
?>
