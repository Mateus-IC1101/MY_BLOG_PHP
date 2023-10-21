<?php

    include_once 'templates/header.php'

?>

<h1>HOME</h1>

<?php
foreach($_SERVER as $key => $item){
    print_r("{$key} => {$item} <br>");
}
?>
