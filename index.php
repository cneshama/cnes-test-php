<?php echo "CNES OpenShift Test rev2 [DB Connect]";
$mysqli = new mysqli('172.30.174.245', 'cnes', 'cnes011', 'cnesmariadb');
if ($mysqli->connect_error) {
    exit($mysqli->connect_error);
} else {
    $mysqli->set_charset("utf8");
}
$result = $mysqli->query("select 1") or exit($mysqli->error());
echo var_dump($result->fetch_assoc());
$mysqli->close();

?>
