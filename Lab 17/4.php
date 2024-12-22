<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name']; 

}

if (!isset($_SESSION['name'])) {
    echo '<form method="POST" action="">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
          </form>';
} else {
    echo "Hello Welcome Back, it's greate to see you " . $_SESSION['name'] . "!";
}
?>


