<?php 
   $stu_id = $_GET['id'];

   include "config.php";

   $sql = "DELETE FROM student WHERE sid = {$stu_id}";
   $result = mysqli_query($conn, $sql) or die("Query Unsuccessfully");

   header("Location: http://localhost/shubh/crud/crud_html/crud_html/index.php");

   mysqli_close($conn);
?>