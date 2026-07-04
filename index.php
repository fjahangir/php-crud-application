<?php include('header.php');?>
<?php include('CRUD_OPS.php');?>
<div class="box1">
            <h2> STUDENT DETAILS</h2>
          <button type="button" class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal">
    ADD STUDENTS
</button>
            </div>
            <table class="table table-hover table-bordered table-striped">
<thead> 
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>AGE</th>
        <th>UPDATE</th>
        <th>DELETE</th>
    </tr>
</thead>
<tbody>
    <?php 
    $query = "SELECT * FROM students";
    $result=mysqli_query($connection,$query);
    if (!$result){
       die("Query failed: " . mysqli_error($connection));
    }
    else{
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
    <tr>
        <td><?php echo $row['ID'];?></td>
        <td><?php echo $row['FIRST_NAME'];?></td>
        <td><?php echo $row['LAST_NAME'];?></td>
        <td><?php echo $row['AGE'];?></td>
        <td><a href="update_page.php?id=<?php echo $row['ID'];?>" class="btn btn-success">UPDATE</a></td>
<td><a href="delete_page.php?id=<?php echo $row['ID'];?>"  class="btn btn-danger">DELETE</a></td>
    </tr>
    <?php
}
    }
    ?>

</tbody>


        </table>
<?php
if(isset($_GET['message'])){
    echo "<h6 style='color:red; text-align:center; font-size:20px;'>" . $_GET['message'] . "</h6>";
}
?>
<?php
if(isset($_GET['msg'])){
    echo "<h5 style='color:green; text-align:center; font-size:20px;'>" . $_GET['msg'] . "</h5>";
}
?>

<!-- Modal -->
 <form  action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
           <div class="form-group">
            <label for="f_name">FIRST NAME</label>
            <input type="text" name="f_name" class="form-control">
           </div>
           <div class="form-group">
            <label for="f_name">LAST NAME</label>
           <input type="text" name="l_name" class="form-control">
           </div>
           <div class="form-group">
            <label for="f_name">AGE</label>
            <input type="text" name="age" class="form-control">
           </div>
    
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_student" value="ADD">
      </div>
    </div>
  </div>
</div>
 </form>
        <?php include('footer.php');?>