<tr>
    <th><?php echo $row["IDNum"]?></th>
    <th><?php echo $row["IDName"]?></th>
    <th><?php echo $row["IDLocation"]?></th>
    <th><?php echo $row["IDFeedback"]?></th>
    <th>
        <button class="btn btn-primary " onclick="Gridview_bank_table_Update('<?php echo $row['IDNum']?>','<?php echo $row['IDName']?>','<?php echo $row['IDLocation']?>','<?php echo $row['IDFeedback']?>','Update_bank_table')">Update</button>
        <button class="btn btn-danger " onclick="Gridview_bank_table_Delete('<?php echo $row['IDNum']?>','Delete_bank_table')">Delete</button>
    </th> 
</tr>

<script>
    function Gridview_bank_table_Update(IDNum,IDName,IDLocation,IDFeedback,IDModal)
    {   
        document.getElementById('update_IDNum').value =IDNum;
        document.getElementById('update_nametbx').value =IDName;
        document.getElementById('update_locationtbx').value =IDLocation;
        document.getElementById('update_feedbacktbx').value =IDFeedback;
        showModal(IDModal);  
         
    }
    function Gridview_bank_table_Delete(IDNum,IDModal)
    {   
        document.getElementById('delete_IDNum').value =IDNum;
        showModal(IDModal);  
         
    }
</script>