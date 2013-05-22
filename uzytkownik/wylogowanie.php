<?PHP

$_SESSION = array();
session_destroy();// Usunięcie sesji
header('location: index.php?id=index'); //Przekierowanie do strony glownej
ob_end_flush();
exit;

?>
