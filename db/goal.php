<?php 
include('connect.php');
if (isset ($_POST['title'])){
    $goal =$_POST['title'];
    $descriptions =$_POST['description'];

        if($goal!=''){
             $today = date('Y-m-d');
            $query = "INSERT INTO goal(tittle,description) VALUES('$goal','$descriptions')";
                 if(mysqli_query($conn,$query)){
            $msg ="Successfully Inserted";
                }else{
            $msg = mysqli_error();
        }
        header('Location:../home.php?msg='.$msg);
             }else{
        $msg ="Goal name required";
        header('Location:../home.php>-?errmsg='.$msg);
        }
        }

?>