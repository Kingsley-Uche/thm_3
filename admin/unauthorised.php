<?php
if(!isset($_SESSION)){session_start();}
session_destroy();
echo "<h3 style='color:red'>Unathorised Access</h3>";

?>