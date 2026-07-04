<?php include('CRUD_OPS.php');?>

<?php
if(isset($_GET['id'])){

    $id = $_GET['id'];
$query = "DELETE FROM students WHERE ID='$id'";
$result = mysqli_query($connection, $query);
}
 if(!$result){
        die("Query Failed: " . mysqli_error($connection));
 }
 else{
     header("Location: index.php?msg=Delete Successfully!");
            exit();
 }
?>