<?php 
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['comment'])) {
	$cname = ($_POST['name']);
    $ccomment = ($_POST['comment']);

$sql2 = "INSERT INTO comment(name, comment) VALUES('$cname','$ccomment')";
$comment = mysqli_query($conn, $sql2);

  header("Location: forum.php");
}else{
    header("Location: forum.php");
	
}