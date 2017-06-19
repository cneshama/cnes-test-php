<?php echo "CNES OpenShift Test rev2 [DB Connect]";

//DB Connect
$mysqli = new mysqli('172.30.174.245', 'cnes', 'cnes011', 'cnesmariadb');
if ($mysqli->connect_error) {
    exit($mysqli->connect_error);
} else {
    $mysqli->set_charset("utf8");
}

//check connect
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//DB select
$mysqli->select_db("test");

//SQL set
//$quryset = mysql_query("SELECT * FROM personal;");
$quryset = $mysqli->query("SELECT * FROM personal;");

echo "<TABLE  border='1' >";
echo "<TR>";
echo "<TD>id";
echo "</TD>";
echo "<TD>old";
echo "</TD>";
echo "<TD>name";
echo "</TD>";
echo "</TR>";

//Get data
//while ($data = mysql_fetch_array($quryset)){
//while ($data = mysqli_fetch_array($quryset, MYSQLI_ASSOC)){
while ($data = mysqli_fetch_array($quryset)){

    echo "<TR>";
    
        //1st column//////////////
        echo "<TD>" . $data[0];
        echo "</TD>";
        //////////////////////////

        //2nd column//////////////
        echo "<TD>" . $data[1];
        echo "</TD>";
        //////////////////////////

        //3rd column//////////////
        echo "<TD>" . $data[2];
        echo "</TD>";
        //////////////////////////

    echo "</TR>";
}
echo "</TABLE>";

//DB Disconnect
$mysqli->close();

?>

