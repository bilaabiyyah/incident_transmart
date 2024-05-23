<?php
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    http_response_code(200);
} else {
    http_response_code(400);
    echo "Bad Request";
}
exit();
?>
