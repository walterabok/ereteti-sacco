<?php
echo '<h1>PHP works</h1>';
echo '<p>Version ' . phpversion() . '</p>';
echo '<p>Served by ' . htmlspecialchars($_SERVER['SERVER_SOFTWARE']) . '</p>';
?>
