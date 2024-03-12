<?php

?>
<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Update_bank_table">
        <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">          
            <div class=" modal-content">
            <form method="POST">        
            <div class="modal-header"> <a class="navbar-brand"><b>Update Entry</b></a></div>
             <div class="modal-body">
             <input id="update_IDNum" name="update_IDNum"  style="display:none" >
             <div>Name</div>
                <div><input class="form-control" id="update_nametbx" name="update_nametbx" required></div>
                <div>Location</div>
                <div><input class="form-control" id="update_locationtbx" name="update_locationtbx" required></div>
                <div>Feedback</div>
                <div><input class="form-control" id="update_feedbacktbx" name="update_feedbacktbx" required></div>                
             </div>
             <div class ="modal-footer">
                    <button onclick="hideModal('Update_bank_table')" class="btn btn-danger w-25">Cancel</button>
                    <button name="updatebtn" class="btn btn-success w-25">Yes</button>                                  
                </div>
            </form>                
            </div>
        </div>
    </div>
<script>

</script>
<?php
    if(isset($_POST["updatebtn"])){     
        DBQuery::IUD("Update bank_table SET IDName = '".$_POST["update_nametbx"]."',  IDLocation ='".$_POST["update_locationtbx"]."', IDFeedback ='".$_POST["update_feedbacktbx"]."' WHERE IDNum ='".$_POST["update_IDNum"]."'");
        echo '<script>window.location.href="";</script>';   
    }
?>