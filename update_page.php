<?php
include('header.php');
include('CRUD_OPS.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];

    // Fetch student details
    $query = "SELECT * FROM students WHERE ID='$id'";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);

    // Update record only after form submission
    if(isset($_POST['update_student'])){

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age   = $_POST['age'];

        $update_query = "UPDATE students
                         SET FIRST_NAME='$fname',
                             LAST_NAME='$lname',
                             AGE='$age'
                         WHERE ID='$id'";

        $update_result = mysqli_query($connection, $update_query);

        if(!$update_result){
            die("Update Failed: " . mysqli_error($connection));
        }else{
            header("Location: index.php?msg=Updated Successfully!");
            exit();
        }
    }
}
?>

<form action="update_page.php?id=<?php echo $id; ?>" method="post">

    <div class="form-group">
        <label>FIRST NAME</label>
        <input type="text" name="f_name" class="form-control"
               value="<?php echo $row['FIRST_NAME']; ?>">
    </div>

    <div class="form-group">
        <label>LAST NAME</label>
        <input type="text" name="l_name" class="form-control"
               value="<?php echo $row['LAST_NAME']; ?>">
    </div>

    <div class="form-group">
        <label>AGE</label>
        <input type="number" name="age" class="form-control"
               value="<?php echo $row['AGE']; ?>">
    </div>

    <br>

    <input type="submit" name="update_student"
           class="btn btn-success"
           value="UPDATE">

</form>

<?php include('footer.php'); ?>