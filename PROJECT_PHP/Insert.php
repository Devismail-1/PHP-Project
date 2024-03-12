
<form method="POST">
<table class="table">
    <thead>
        <td><a>New Entry</a></td>
        <td>           
            <div>Name</div>
            <div><input name="nametbx" class="form-control" required></div>
        </td>
        <td>
            <div>Location</div>
            <div><input name="locationtbx" class="form-control" required></div>
        </td>
        <td>
            <div>Feedback</div>
            <div><input name="feedbacktbx" class="form-control" required></div>
        </td>
        <td class="align-bottom">
            <input type="Submit" name="addbtn" class="btn btn-success">
        </td>
    </thead>
</table>
</form>
<?php
    if(isset($_POST["addbtn"])){
        include_once 'MyFrameworks/DBQuery.php';
        DBQuery::IUD("Insert INTO bank_table (IDName,IDLocation,IDFeedback) VALUES ('".$_POST["nametbx"]."','".$_POST["locationtbx"]."','".$_POST["feedbacktbx"]."') ");
    }
?>