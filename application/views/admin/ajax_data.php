<?php
//lead details more
if($from == "leads"){
    //p($ld);    
?>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th colspan="2">Contact Information</th>
        </tr>
        <tr>
            <td>Name: </td>
            <td><?php echo $ld[0]['Title'].'. '.$ld[0]['First_Name'].' '.$ld[0]['Last_Name']; ?></td>
        </tr>
        <tr>
            <td>Job Title: </td>
            <td><?php echo $ld[0]['Job_Title']; ?></td>
        </tr>
        
    </table>
    <i>Need to fill more details here!!</i>
</div>

<?php
}

