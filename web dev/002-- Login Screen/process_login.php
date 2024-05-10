<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($password === "secret") {
                echo '<p><a href="google.com">Click here to continue</a></p>';
            } else {
                echo '<p style="color: red;">Incorrect password. Please try again.</p>';
            }
        }
        ?>