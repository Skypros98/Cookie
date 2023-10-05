<?php
setcookie("user", "Ahmad", time() + (86400 * 30));


if (isset($_COOKIE['user'])) {
    echo "Cookie: " . $_COOKIE['user'];

} else {
    echo "Coba refresh lagi browsernya.";
}


?>