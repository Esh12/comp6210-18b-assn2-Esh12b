<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  <div class="imageID">
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

       <div class="text">
       <?php 
    foreach($data["info"] as $info) {
        ?>

            <div class="col-sm-12">
                <h1><?php echo $info["FNAME"]; ?>
                <?php echo $info["LNAME"]; ?> </h1> 
                
                 <p> <b> <i> <?php echo $info["Dname"]; ?>  </b> </i> <?php echo $info["DOB"]; ?> </p>
                <p> <b> <i> <?php echo $info["Pname"]; ?> </b> </i><?php echo $info["PHONE"]; ?> </p>
                <p> <b> <i> <?php echo $info["Ename"]; ?> </b> </i><?php echo $info["EMAIL"]; ?> </p>
              
               <p> <b> <?php echo $info["About"]; ?> </p> </b>
               <p> <?php echo $info["Reason"]; ?> </p>
            </div>
            
            

        <?php
    }
?>

</div>







<!--End mc_embed_signup-->
<!--End mc_embed_signup-->
  
</div>
              
    </div>

    

</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>