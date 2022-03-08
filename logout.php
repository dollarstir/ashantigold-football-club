<?php

session_start();
session_destroy();
echo '<script>window.location="auth_login.php"</script>';

?>