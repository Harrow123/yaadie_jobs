<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        $id = $_GET['id'];

        //call delete function
        $result = $crud->deleteAttendee($id);
        //Redirect list
        if($result)
        {
            header ("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>





















?>