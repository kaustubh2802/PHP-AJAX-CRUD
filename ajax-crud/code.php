<?php

$conn = mysqli_connect("localhost","root","","phpcrud");

if(!$conn){
    die('Connection Failed'. mysqli_connect_error());
}

if(isset($_POST['checking_add']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    $query = "INSERT INTO students (fname,lname,class,section) VALUES ('$fname','$lname','$class','$section')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return  = "Successfully Stored";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}

?>












<?php
// $conn = mysqli_connect("localhost", "root", "", "phpcrud");
// $query = "SELECT * FROM students";
// $query_run = mysqli_query($conn, $query);

// $result_array = [];

// if (mysqli_num_rows($query_run) > 0) {
//     foreach ($query_run as $row) {
//         $result_array[] = $row;
//     }
//     header('Content-Type: application/json');
//     echo json_encode($result_array);
// } else {
//     echo json_encode(["message" => "No records found"]);
// }
?>
