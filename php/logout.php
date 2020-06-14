<?php
session_start();
session_unset();
session_destroy();
print "<script>window.location='../ingreso.php'</script>";
?>