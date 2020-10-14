<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conJJGM = "localhost";
$database_conJJGM = "u684092389_jjgm_db";
$username_conJJGM = "u684092389_jjgm";
$password_conJJGM = "5e[U}Pn]L^4hkiw=";
$conJJGM = mysql_pconnect($hostname_conJJGM, $username_conJJGM, $password_conJJGM) or trigger_error(mysql_error(),E_USER_ERROR); 
?>