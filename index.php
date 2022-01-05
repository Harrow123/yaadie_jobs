
<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

   $results = $crud->getSpecialties();
?>

    <h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php">

        <div class="form-group">
            <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="firstname" name="firstname">
            </div>
        </div>

        <div class="form-group">
            <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
            <input required type="text" class="form-control" id="lastname"name="lastname">
            </div>
        </div>

        <div class="form-group">
            <label for="dob" class="col-sm-4 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dob"name="dob">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-4 col-form-label">Email Address</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="email" name="email">
            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-sm-4 col-form-label">Contact Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        </div>

        <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <div class="col-sm-10">
                <select class="form-control" id="specialty" name="specialty">
                    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                        <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <br/>   
        <div class="custom-file">
            <input type="file" accept ="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
        </div>


        <br>
        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
    </form>
<br>
 <?php require_once 'includes/footer.php'; ?>