<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
   <div class="content-background-1">
  <?php include(APPROOT . "/views/includes/menu4.php"); ?>


</div>


<table class="table">
            <thead class="myheader">
                <tr>
                    <th> Name</th>
                    <th>Email <th>

                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                  

                  $output = "";

                    foreach($data['form'] as $form) { ?>

                       

                     
                            <td> <?php echo $form["NAME"];?> </td>

                            <td> <?php echo $form["EMAIL"];?> </td>

                            <td> <?php echo $form["SUBJECT"];?> </td>
                            <td> <?php echo $form["MESSAGE"];?> </td>
                         </tr>

                      
                        
                    <?php } ?>

                 
            </tbody>
        </table>
 
  
</div>
</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>