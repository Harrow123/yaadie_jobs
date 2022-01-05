<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname =$_POST['firstname'];
        $lname =$_POST['lastname'];
        $dob =$_POST['dob'];
        $email =$_POST['email'];
        $contact =$_POST['phone'];
        $specialty =$_POST['specialty'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);


        //call function to insert and track if success or not
        $isSuccess = $crud->INSERTAttendees($fname, $lname, $dob, $email, $contact, $specialty, $destination);
        $specialtyName = $crud->getSpecialtyById($specialty);

        if($isSuccess){
            SendEmail::SendMail ($email, 'Welcome to IT 2019 Conference', 'You have successfully registered for this year\'s IT Conference');
            //echo '<h1 class="text-center text-success">You Have Been Registered</h1>';
            include 'includes/successmessage.php';
        }
        else{
            //echo '<h1 class="text-center text-danger">There was an error processing</h1>';
            include 'includes/errormessage.php';
        }
    }
?>



    <!--This prints out values that were passed to the action page using the method get-->
    <!--<div class="card" style="width: 18rem;">
        <div class="card-body"> <h1 class="text-center text-success">You Have Been Registered</h1>
            <h5 class="card-title">
                <?php //echo $_GET['firstname'] . " " . $_GET['lastname']; ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted">    
                <?php //echo $_GET['specialty'] ?> 
            </h6>
              Date of Birth:  <p class="card-text"><?php //echo $_GET['dob']?> </p>
              Contact Number:  <a href="#" class="card-link"><?php //echo $_GET['phone']?></a>
              <br>Email Address  <a href="#" class="card-link"><?php //echo $_GET['email']?></a>
        </div>
    </div>-->

    <img src="<?php echo $destination; ?>"class="rounded-circle" style="width: 20%; height: 20%" />
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . " " . $_POST['lastname']; ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $specialtyName['name'] ?>
            </h6>
              Date of Birth:  <p class="card-text"><?php echo $_POST['dob']?> </p>
              Email Address:  <a href="#" class="card-link"><?php echo $_POST['email']?></a>
            <br>  Contact Number: <br> <a href="#" class="card-link"><?php echo $_POST['phone']?></a>
        </div>
    </div>

<br>
<br>
