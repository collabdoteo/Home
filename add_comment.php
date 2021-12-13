<?php
// $blog_num ='1';

    // using mysqli
    
    include 'connection.php';    
    // echo "Connected Successfully";

    //get the post records
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }
    $blog = $blog_num;
    // $date = date("Y-m-d H:i:s");
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Kolkata'));

    $fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()

    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO blog VALUES ('$fdate', '$name', '$email', '$message' , '$blog_num')";
        // $sql = "INSERT INTO blog VALUES ('$date', '$name', '$email', '$message' , '$blog_num')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo '<script>confirm("Thank You for your comment. We will post them, once verified.");</script>';
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    } 


    mysqli_close($conn);


?>