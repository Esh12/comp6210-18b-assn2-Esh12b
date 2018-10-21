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
    <?php 

    foreach($data["twentyseventeen"] as $twentyseventeen) {
        ?>
<div class= "classscontent">
            <div class="classgrid">
                <h1><?php echo $twentyseventeen["Class"]; ?> </h1>
                
               <p> <?php echo $twentyseventeen["About"]; ?> </p>
            </div>
    </div>
            

        <?php
    }
?>
       <div class="text">
      

</div>







<!--End mc_embed_signup-->
<!--End mc_embed_signup-->
  
</div>
              
    </div>

    

</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>