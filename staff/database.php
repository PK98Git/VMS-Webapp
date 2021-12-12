<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$dbname = "vms";
$conn=mysqli_connect($url,$username,$password, $dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

function runQuery($query) {
    $result = mysqli_query($this->conn, $query);
    while($row=mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
    }
    if(!empty($resultset))
        return $resultset;
}
?>
