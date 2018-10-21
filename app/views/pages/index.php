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

       <div class="text">
       <?php 
    foreach($data["info"] as $info) {
        ?>

            <div class="col-sm">
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