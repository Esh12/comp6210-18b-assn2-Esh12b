<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
   <div class="content-background-1">
  <?php include(APPROOT . "/views/includes/menu2.php"); ?>
 <p class="Classname"> COMP.5212</p>

    </div>
    <div class="content">


       <?php 
    foreach($data["programming"] as $programming) {
        ?>
   

            <div class="col-sm">
                <h1><?php echo $programming["CName"]; ?> </h1> 
                <p>
                <?php echo $programming["Discription"]; ?> 
                
    </p>
            
            

        <?php
    }
?>

</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>