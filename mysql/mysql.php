<?PHP
include('mysql/laczenie.php');
mysql_connect ( $host, $user, $haslo)or die("Nie można się połączyć z bazą: ".mysql_error());
mysql_select_db($nazwa_bazy) or die(mysql_error());mysql_connect ( $host, $user, $haslo)or die("Nie można się połączyć z bazą: ".mysql_error());
mysql_select_db($nazwa_bazy) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>