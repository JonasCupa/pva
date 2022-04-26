<?php
/**
 * Článek
 */

//řešení
echo '<form action="clanek.php" method="post">';
echo 'Language:     <input type="text"  name="lang"><br>';
echo 'ID:     <select type="text"  name="id"><br>';
echo '<input type="submit" name="odeslat">';
echo '</form>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<h2>Language ' . $_POST["lang"] . '</h2>';
    echo '<h2>ID ' . $_POST["id"] . '</h2>';
    
    
}
?>
