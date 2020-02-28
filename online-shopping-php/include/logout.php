<?php
session_start();
session_destroy();
echo "<script> alart('Logout complete.') </script>" ;
echo "<script> location='../index.php' </script>"
?>