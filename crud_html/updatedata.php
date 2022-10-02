<?php 
    $stu_id = $_POST['sid']; 
    $stu_name = $_POST['sname']; 
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['sclass'];
    $stu_phone = $_POST['sphone'];

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
    $sql = "UPDATE student SET sname = '{$stu_name}', sclass = '{$stu_class}', saddress = '{$stu_address}', sphone = '{$stu_phone}' WHERE sid = '{$stu_id}' ";
    $result = mysqli_query($conn, $sql) or die("query unsccessfull.");

    header("Location: http://localhost/shubh/crud/crud_html/crud_html/index.php");

    mysqli_close($conn);
        
?>