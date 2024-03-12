<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/Animation.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/MyJS.js" type="text/javascript"></script>
<?php
// Start the session
session_start();
?>
</head>
<body>    
    
    <div class="container-fluid" style="margin-top:100px">
        <center>
        <div class="w-75">
        <?php
         include_once 'CRUD_Insert.php';
        ?>
        <table class="table">
            <thead>
                <td>No.</td>  
                <td>Name</td>  
                <td>Location</td>  
                <td>Feedback</td>  
                <td>Action</td>  
            </thead>
            <tbody>
                <?php
                 include_once 'MyFrameworks/DBQuery.php';
                 DBQuery::SetDiv("SELECT * FROM bank_table order by IDNum  desc",'Gridview_bank_table_Admin.php'); 
                ?>
            </tbody>
        </table>
        </div>
        </center>
    </div>  
    </div>
</body>

<?php
  include_once 'CRUD_Delete.php';
  include_once 'CRUD_Update.php';
?>

</html>