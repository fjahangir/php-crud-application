<?php
include 'CRUD_OPS.php';
if (isset($_POST['add_student'])){
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $age=$_POST['age'];
    
    if($fname==""|| empty($fname)){
       header("Location: index.php?message=You need to fill in the first name!");
       exit();
    }
    
      if($lname==""|| empty($lname)){
       header("Location: index.php?message=You need to fill in the first name!");
       exit();

    }
      if($age==""|| empty($age)){
       header("Location: index.php?message=You need to fill in the first name!");
       exit();

    }
     else{
      $query = "INSERT INTO students (FIRST_NAME, LAST_NAME, AGE)
VALUES ('$fname', '$lname', '$age')";
        $result= mysqli_query($connection, $query);
        if(!$result){
            die("query failed".mysqli_error($connection));
        }
        else{
              header("Location: index.php?msg=Student Added Suceessfully");
        }
    }
}
?>