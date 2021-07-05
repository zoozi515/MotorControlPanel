<?php
    //This is my project participation from line 3 to line 23
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "rebortdata";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
   
    if(isset($_POST['save'])){
        $motor1 = $_POST['m1'];
        $motor2 = $_POST['m2'];
        $motor3 = $_POST['m3'];
        $motor4 = $_POST['m4'];
        $motor5 = $_POST['m5'];
        $motor6 = $_POST['m6'];

        $sql= "INSERT INTO motors_value (motor1,motor2,motor3,motor4,motor5,motor6) "
                . "VALUES('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', $motor6)";
        if ($conn->query($sql) === TRUE){
            echo "Motors' value added successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }elseif(isset($_GET['Running'])){
        $result = mysqli_query($conn,"SELECT * FROM motors_value order by op_id DESC limit 1" );
        $data= @mysqli_fetch_assoc($result);
        if( @$data['op_id']>0){
            echo json_encode($data) ;
        }else {}
    }
?>