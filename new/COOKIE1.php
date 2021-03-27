<?php
$cookie_name = "user";
$cookie_value = "John";
setcookie($cookie_name, $cookie_value, time()+10);
echo "set cookie";
?>