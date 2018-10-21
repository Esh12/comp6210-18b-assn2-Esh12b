<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
  <div class="imageID">
  <?php include(APPROOT . "/views/includes/menu.php"); ?>
  
  <?php 
    foreach($data["mypic"] as $mypic) { ?>

        
<img class="icon" src="<?php echo URLROOT . "images/" . $mypic["IMAGE"] . ".png" ?>"alt="Card image cap">
<?php } ?>
<?php 
foreach($data["pic"] as $pic) { ?>

    
<img class="social" src="<?php echo URLROOT . "images/" . $pic["IMAGE"] . ".png" ?>"alt="Social">
<?php } ?>  
 

    </div>
    <div class="content">
  
    <table class="table">
            <thead class="myheader">
                <tr>
                    <th>Class Name</th>
                    <th>Final mark</th>

                    <th>Final Result</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                  

                  $output = "";

                    foreach($data['mymarks'] as $mymarks) { ?>

                       

                     
                            <td> <?php echo $mymarks["Class"];?> </td>

                            <td> <?php echo $mymarks["finalmark"];?> </td>

                            <td> <?php echo $mymarks["finalmark"];?> </td>
                         </tr>

                      
                        
                    <?php } ?>

                 
            </tbody>
        </table>
 
       <div class="text">
      

</div>







<!--End mc_embed_signup-->
<!--End mc_embed_signup-->
  
</div>
              
    </div>

    

</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>