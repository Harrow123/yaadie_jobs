<?php 
    $title = 'View Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php'; 
    require_once 'db/conn.php';
    
    //Get Attendee by ID
    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'>Please check details and try again</h1>";
           
        } else { 
            $id = $_GET['id'];
            $result = $crud->getAttendeeDetails($id);
            
    
?>
<img src="<?php echo empty($result['avatar_path']) ? "uploads/" : $result['avatar_path'] ; ?>" 
class="rounded-circle" style="width: 20%; height: 20%" />

<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['firstname'] . " " . $result['lastname']; ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo $result['name'] ?>
                    </h6>
              Date of Birth:  <a class="card-text"><?php echo $result['dateofbirth']; ?></a>
             <br><br> Email Address:  <a href="#" class="card-link"><?php echo $result['emailaddress']; ?></a>
             <br> <br>Contact Number:  <a href="#" class="card-link"><?php echo $result['contactnumber'];?></a>
      </div>
</div>
<br/>
        <a href="viewrecords.php" class="btn btn-info">Back to list</a>
        <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick = "return confirm('Are you sure you want to delte this record?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" 
        class="btn btn-danger">Delete</a>

<?php } ?>
<br>

<br>
<?php require_once 'includes/footer.php';?>