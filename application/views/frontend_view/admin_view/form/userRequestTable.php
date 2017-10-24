<table border="1">  
    <tbody>  
        <tr>                              
            <td>userFBID</td>  
            <td>userFirstName</td> 
            <td>userLastName</td> 
            <td>userEmail</td>
            <td>userType</td>                             
            <td>userChangeTypeRequest</td> 

            <td>change user type</td>
        </tr>  
        <?php
        foreach ($h->result() as $row) {
            ?><tr>  
                <td><?php echo $row->userFBID; ?></td>  
                <td><?php echo $row->userFirstName; ?></td>  
                <td><?php echo $row->userLastName; ?></td>  
                <td><?php echo $row->userEmail; ?></td> 
                <td><?php echo $row->userType; ?></td>
                <td><?php echo $row->userChangeTypeRequest; ?></td>
                <td><input id="userTypeSwitcher"
                           type="button" 
                           value="switch user Type" 
                           name="changeUserType" 
                           onclick="switchUserType('<?php echo $row->userFBID; ?>', '<?php echo $row->userType; ?>');"/>
                </td>
            </tr>  
        <?php }
        ?>  
    </tbody>  
</table>