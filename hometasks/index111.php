<?php
if (isset($_POST['name'])) {
    echo "Welcome, " . $_POST['name'];
    $varName = 'name';
    setcookie($varName, $_POST ['name']);   
    //print_r($_POST ['name']);   
} else {
    echo "Please log in first";
    
}
?>