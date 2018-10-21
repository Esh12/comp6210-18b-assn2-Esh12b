<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
  <div class="imageID">
  <?php include(APPROOT . "/views/includes/menu.php"); ?>
  <?php 
    foreach($data["info"] as $info) { ?>

        
<img class="icon" src="<?php echo URLROOT . "images/" . $info["IMAGE"] . ".png" ?>"alt="Card image cap">
<?php } ?>
      
<?php 
    foreach($data["info"] as $info) { ?>

        
<img class="social" src="<?php echo URLROOT . "images/" . $info["Social"] . ".png" ?>"alt="Social">
<?php } ?>  
 

    </div>
    <div class="content">
    <?php 

    foreach($data["info"] as $info) {
        ?>
<div class= "classscontent">
            <div class="classgrid">
                <h1><?php echo $info["Class"]; ?> </h1>
                
               <p> <?php echo $info["CAbout"]; ?> </p>
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