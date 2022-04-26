<?php

/**
 * Fokrmulář 
 */  
echo '<form action="formular.php" method="post">';
echo 'Name:     <input type="text"  name="name"><br>';
echo 'Age:     <input type="text"  name="age"><br>';
echo 'Email:     <input type="text"  name="email"><br>';
echo 'Password:     <input type="text"  name="password"><br>';
echo '<input type="submit" value="odeslat">';
echo '</form>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<h2>Thank you ' . $_POST["name"] . '</h2>';
    echo '<h2>Age ' . $_POST["age"] . '</h2>';
    echo '<h2>Email ' . $_POST['email'] . '</h2>';
    echo '<h2>Password ' . $_POST['password'] . '</h2>';
}
//řešení

?>