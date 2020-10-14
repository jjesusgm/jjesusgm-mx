<?php require_once('../Connections/conJJGM.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conJJGM, $conJJGM);
$query_rsPrueba = "SELECT * FROM prueba ORDER BY apellido_1 ASC";
$rsPrueba = mysql_query($query_rsPrueba, $conJJGM) or die(mysql_error());
$row_rsPrueba = mysql_fetch_assoc($rsPrueba);
$totalRows_rsPrueba = mysql_num_rows($rsPrueba);
?>
<html>
	<head>
		<title>Prueba con BD | Sitio personal de JJGM @ Hostinger</title>
	</head>
	<body>
	<table width="50%" border="1">
	  <tr>
	    <th scope="col">ID</th>
	    <th scope="col">NOMBRE(S)</th>
	    <th scope="col">APELLIDO 1</th>
	    <th scope="col">APELLIDO 2</th>
      </tr>
	  <?php do { ?>
      <tr>
        <td><?php echo $row_rsPrueba['id']; ?></td>
        <td><?php echo $row_rsPrueba['nombres']; ?></td>
        <td><?php echo $row_rsPrueba['apellido_1']; ?></td>
        <td><?php echo $row_rsPrueba['apellido_2']; ?></td>
      </tr>
	    <?php } while ($row_rsPrueba = mysql_fetch_assoc($rsPrueba)); ?>
    </table>
		
	</body>
</html>
<?php
mysql_free_result($rsPrueba);
?>
