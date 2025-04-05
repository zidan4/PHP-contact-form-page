<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);

echo "<h2>Thanks, $name!</h2>";
echo "<p>We will contact you at $email soon.</p>";
?>
