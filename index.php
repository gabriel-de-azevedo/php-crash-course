<?php
setcookie("custom", "cookie", time() + (86400 * 30), "/");
setcookie("custom2", "cookie2", time() + (86400 * 30), "/");
setcookie("custom3", "cookie3", time() + (86400 * 30), "/");

foreach ($_COOKIE as $key => $value) {
    echo $key . " => " . $value . "<br>";
}